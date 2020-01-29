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


class UsuarioType extends AbstractType
{

    private $em;
    private $eventRepository;
    private $provinciaRepository;

    /**
     * EventBLL constructor.
     * @param $em
     */
    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
        $this->eventRepository = $this->em->getRepository(Provincia::class);
        $this->provinciaRepository = $this->em->getRepository(Provincia::class);
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $provincias = $this->provinciaRepository->findAll();
        $provinciasSelect = array();
        foreach ($provincias as $provincia) {
            $provinciasSelect[$provincia->getNombre()] = $provincia->getId();
        }

        $builder->add('username', TextType::class, [
            'label' => 'Nombre de usuario',
            'attr' => ['class'=> 'registro_nombre']
        ])
        ->add('fkProvincia', ChoiceType::class, [
            'label' => 'Provincia',
            'attr' => ['class'=> 'registro_provincia'],
            'choices' => $provinciasSelect
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'attr' => ['class'=> 'registro_email', 'type' => 'email']
        ]);

        $builder->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options'  => ['label' => 'Contraseña'],
            'second_options' => ['label' => 'Repetir contraseña'],
            'attr' => ['class'=> 'registro_password']
        ]);

        $builder->add('save', SubmitType::class,[ 'label' => 'REGISTRARME', 'attr' => ['class' => 'registro_enviar'] ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Usuario::class,
        ));
    }

}