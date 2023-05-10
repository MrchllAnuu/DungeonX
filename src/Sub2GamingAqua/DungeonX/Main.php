<?php

namespace Sub2GamingAqua\DungeonX;

use pocketmine\block\Block;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

    private $config;

    public function onEnable() : void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);
    }

    public function onBlockBreak(BlockBreakEvent $event){
        $player = $event->getPlayer();
        $blocks = $event->getBlock();
        $block = $event->getBlock()->getPosition();
        if($block->getWorld()->getFolderName() === $this->config->get("levelname")){
            if($blocks->getId() === 16 && $this->config->get("coal_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 15 && $this->config->get("iron_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 14 && $this->config->get("gold_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->cancel();
                $event->setXpDropAmount(0);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 56 && $this->config->get("diamond_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 129 && $this->config->get("emerald_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 153 && $this->config->get("quartz_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 21 && $this->config->get("lapis_ore") == true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::AIR());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 142 && $this->config->get("potato_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 141 && $this->config->get("carrot_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 103 && $this->config->get("melon_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif(in_array($blocks->getId(), [83, 0]) && $this->config->get("sugarcane") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->getXpManager()->addXp($event->getXpDropAmount());
                $event->cancel();
                $event->setXpDropAmount(0);
                $block->getWorld()->setBlock($block->asVector3(), VanillaBlocks::BEDROCK());
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $blocks), 20 * $this->config->get("delay"));
            } elseif($blocks->getId() === 81 && $this->config->get("cactus") == true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
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
