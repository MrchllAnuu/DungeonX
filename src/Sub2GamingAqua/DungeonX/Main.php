<?php

namespace Sub2GamingAqua\DungeonX;

use pocketmine\block\Block;
use pocketmine\block\VanillaBlocks;
use pocketmine\items\VanillaItems
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\player\GameMode;

class Main extends PluginBase implements Listener{

    private $config;

    public function onEnable() : void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);
    }

    public function onBlockBreak(BlockBreakEvent $event) : void {
        $player = $event->getPlayer();
        $blocks = $event->getBlock();
        $block = $event->getBlock()->getPosition();
        if ($player->getGamemode()->equals(GameMode::CREATIVE()) || $player->getGamemode()->equals(GameMode::SPECTATOR())) {
            return;
        }
        if($block->getWorld()->getFolderName() === $this->config->get("levelname")){
            if($blocks->getTypeId() == BlockTypeIds::COAL_ORE() && $this->config->get("coal_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::IRON_ORE() && $this->config->get("iron_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::GOLD_ORE() && $this->config->get("gold_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::DIAMOND_ORE() && $this->config->get("diamond_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::EMERALD_ORE() && $this->config->get("emerald_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::QUARTZ_ORE() && $this->config->get("quartz_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::LAPIS_LAZULI_ORE() && $this->config->get("lapis_ore") == true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == ItemTypeIds::POTATO() && $this->config->get("potato_block") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == ItemTypeIds::CARROT() && $this->config->get("carrot_block") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == ItemTypeIds::MELON() && $this->config->get("melon_block") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif(in_array($blocks->getTypeId() == ItemTypeIds::SUGAR()  && $this->config->get("sugarcane") === true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getTypeId() == BlockTypeIds::CACTUS() && $this->config->get("cactus") == true){
                foreach ($event->getDrops() as $drop) {
                    if ($player->getInventory()->canAddItem($drop)) {
                        $event->getPlayer()->getInventory()->addItem($drop);
                    } else {
                        $player->sendPopup("§cYour inventory is full!");
                    }
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::AIR());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            }
        }
    }
}
