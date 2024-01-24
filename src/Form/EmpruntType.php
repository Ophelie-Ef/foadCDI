<?php

namespace App\Form;

use App\Entity\Emprunt;
use App\Entity\Etudiant;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpruntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_emprunt')
            ->add('date_retour')
            ->add('etudiant', EntityType::class, [
                'class' => Etudiant::class,
'choice_label' => 'id',
            ])
            ->add('livre', EntityType::class, [
                'class' => Livre::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Emprunt::class,
        ]);
    }
}
