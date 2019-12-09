<?php

namespace App\Form;

use App\Entity\Affilie;
use App\Entity\Contrat;
use App\Form\AffilieType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('affilies', CollectionType::class, [
                'entry_type' => AffilieType::class,                
                'entry_options' => ['label' => false,
                                     'attr' => [ 'libelle' => 'Libelle de l\'affiliation' ]
                                    ],
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
