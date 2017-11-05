<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\MeasurePlace;
use Symfony\Component\Validator\Constraints\EqualTo;

class MeasurePlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('road_number', TextType::class, ['label' => 'Číslo silnice', 'required' => false])
            ->add('street', TextType::class, ['label' => 'Ulice', 'required' => false])
            ->add('city', TextType::class, ['label' => 'Obec', 'required' => false])
            ->add('district', TextType::class, ['label' => 'Okres', 'required' => false])
            ->add('speed', IntegerType::class, ['label' => 'Omezení rychlosti', 'required' => false])
            ->add('place_desc', TextareaType::class, ['label' => 'Popis místa', 'required' => false])
            ->add('camera', ChoiceType::class, ['choices' => [
                'Stacionární' => 'Stacionární',
                'Úseková'     => 'Úseková'
            ]])
            ->add('antispam', TextType::class, [
                'label'       => 'Zadejte aktuální rok (antispam)',
                'mapped'      => false,
                'constraints' => [
                    new EqualTo(['value' => date("Y"), 'message' => 'Chybně vyplněný antispam!'])
                ]
            ])
            ->add('save', SubmitType::class, ['label' => 'odeslat']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'      => MeasurePlace::class,
            'csrf_protection' => 'true',
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'task_item',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_measureplace';
    }


}
