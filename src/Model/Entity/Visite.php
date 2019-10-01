<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visite Entity
 *
 * @property int $id
 * @property int $numerodossier
 * @property string $garantie
 * @property \Cake\I18n\FrozenTime $dateetheurevisiter
 */
class Visite extends Entity
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
        'numerodossier' => true,
        'garantie' => true,
        'dateetheurevisiter' => true
    ];
}
