<?php


namespace App\Form;

use App\Entity\Provincia;
use App\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PerfilType extends AbstractType
{

    private $em;
    private $eventRepository;

    /**
     * EventBLL constructor.
     * @param $em
     */
    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
        $this->eventRepository = $this->em->getRepository(Provincia::class);
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('imagen', FileType::class, [
            'label' => 'Imagen',
            'required' => false
        ]);

        $builder->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options'  => ['label' => 'Password'],
            'second_options' => ['label' => 'Repeat Password'],
            'attr' => ['class'=> 'registro_password'],
            'required' => false
        ]);

        $builder->add('save', SubmitType::class,[ 'label' => 'ACTUALIZAR', 'attr' => ['class' => 'registro_enviar'] ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Usuario::class,
        ));
    }

}