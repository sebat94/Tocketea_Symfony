<?php
namespace App\EventListener;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Entity\Usuario;
use App\Service\FileUploader;

class ImagenUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        if (!$entity instanceof Usuario)
            return;

        $file = $entity->getImagen();

        if ($file instanceof UploadedFile)
        {
            $fileName = $this->uploader->upload($file);

            $entity->setImagen($fileName);
        }
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Usuario)
            return;

        if ($fileName = $entity->getImagen())
        {
            $entity->setImagenFile(
                new File(
                    $this->uploader->getTargetDir().'/'.$fileName
                )
            );
        }
    }
}