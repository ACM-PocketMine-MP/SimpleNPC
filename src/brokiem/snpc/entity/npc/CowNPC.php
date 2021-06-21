<?php

declare(strict_types=1);

namespace brokiem\snpc\entity\npc;

use brokiem\snpc\entity\BaseNPC;

class CowNPC extends BaseNPC {

    public const SNPC_ENTITY_ID = "minecraft:cow";

    public $height = 1.4;
    public $width = 1;
}
