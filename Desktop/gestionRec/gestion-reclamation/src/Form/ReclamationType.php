<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Citoyen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints as Assert;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numerorec')
            ->add('typereclamation')
            ->add('descriptionrec')
            ->add('villerec')
            ->add('idcitoy',EntityType::class, [
                'class' => Citoyen::class,
                'choice_label' => 'idcitoy',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
