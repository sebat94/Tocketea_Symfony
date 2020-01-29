<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 17/02/2018
 * Time: 12:13
 */

namespace App\Form;
use App\Entity\Categoria;
use App\Entity\Evento;
use App\Entity\Provincia;
use App\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class EventoType extends AbstractType
{

    private $em;
    private $eventRepository;
    private $categoriaRepository;
    private $provinciaRepository;
    private $usuarioRepository;

    /**
     * EventoBLL constructor.
     * @param $em
     */
    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
        $this->eventRepository = $this->em->getRepository(Evento::class);
        $this->categoriaRepository = $this->em->getRepository(Categoria::class);
        $this->provinciaRepository = $this->em->getRepository(Provincia::class);
        $this->usuarioRepository = $this->em->getRepository(Usuario::class);
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $categorias = $this->categoriaRepository->findAll();
        $categoriasSelect = array();
        foreach ($categorias as $categoria) {
            $categoriasSelect[$categoria->getNombre()] = $categoria->getId();
        }

        $provincias = $this->provinciaRepository->findAll();
        $provinciasSelect = array();
        foreach ($provincias as $provincia) {
            $provinciasSelect[$provincia->getNombre()] = $provincia->getId();
        }

        $builder->add('titulo', TextType::class, [
            'label' => 'Título'
        ])

        ->add('fkCategoria', ChoiceType::class, [
            'choices' => $categoriasSelect,
            'label' => 'Categoría'
        ])

        ->add('ventaFechaInicio', DateType::class, [
            'label' => 'Venta de entradas desde'
        ])
        ->add('ventaFechaFin', DateType::class, [
            'label' => 'Hasta'
        ])
        ->add('fechaCelebracion', DateType::class, [
            'label' => 'Fecha celebración'
        ])
        ->add('horaCelebracion', TimeType::class, [
            'label' => 'Hora celebración'
        ])

        ->add('fkProvincia', ChoiceType::class, [
            'choices' => $provinciasSelect,
            'label' => 'Provincia'
        ])

        ->add('direccion', TextType::class, [
            'label' => 'Dirección'
        ])
        ->add('totalEntradas', NumberType::class, [
            'label' => 'Total entradas'
        ])
        ->add('precioEntradas', NumberType::class, [
            'label' => 'Precio entradas'
        ])

        ->add('imagen', FileType::class, [
            'label' => 'Imagen',
            'data' => ''
        ])

        ->add('enlaceExterno', TextType::class, [
            'label' => 'Enlace Externo'
        ])
        ->add('descripcion', TextType::class, [
            'label' => 'Descripción'
        ])

        ->add('save', SubmitType::class,[ 'label' => 'GUARDAR', 'attr' => ['class' => 'registro_enviar'] ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Evento::class,
        ));
    }

}