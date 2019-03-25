<?php

namespace App\Form;

use App\Entity\Registro1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class Registro1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaAsesoria')
            ->add('radicadoCaso')
            ->add('area')
            ->add('nombreCompleto', TextType::class, ['label' => 'Nombre Completo'])
            ->add('documentoId')
            ->add('fechaExpedicion')
            ->add('ocupacion')
            ->add('departamento')
            ->add('municipio')
            ->add('ciudad')
            ->add('direccion')
            ->add('barrio')
            ->add('telFijo')
            ->add('telCelular')
            ->add('email')
            ->add('estrato')
            ->add('escolaridad')
            ->add('nombreContacto')
            ->add('parentescoContacto')
            ->add('direccionContacto')
            ->add('barrioContacto')
            ->add('telfijoContacto')
            ->add('telcelContacto')

            ->add('emailContacto')
            ->add('preguntaConsultorio')
            ->add('apoderado')
            ->add('hechoCaso')
            ->add('menoresCaso')
            ->add('porSerRegistro')
            ->add('porSerPosibleSolucion')
            ->add('noSeIntentara')
            ->add('fechaRegreso')
            ->add('lugar')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Registro1::class,
        ]);
    }
}
