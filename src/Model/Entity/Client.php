<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $Nomprenom
 * @property string $CIN
 * @property string $Adresse
 * @property string $Phone
 * @property string $email
 * @property string $dossiers
 *
 * @property \App\Model\Entity\File[] $file
 */
class Client extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Nomprenom' => true,
        'CIN' => true,
        'Adresse' => true,
        'Phone' => true,
        'email' => true,
        'dossiers' => true,
        'file' => true
    ];
}
