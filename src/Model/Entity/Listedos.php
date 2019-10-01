<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Listedos Entity
 *
 * @property int $id
 * @property string $client
 * @property string $type
 * @property \Cake\I18n\FrozenDate $datedarrivée
 * @property \Cake\I18n\FrozenDate $deadline
 * @property int $credit
 * @property string $garanties
 * @property array $fichier
 * @property string $direction
 */
class Listedos extends Entity
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
        'client' => true,
        'type' => true,
        'datedarrivée' => true,
        'deadline' => true,
        'credit' => true,
        'garanties' => true,
        'fichier' => true,
        'direction' => true
    ];
}
