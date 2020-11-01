<?php
interface ExplosionInterface
{
    public function explode(): string;
}

interface WeaponInterface { }

class Pistol implements WeaponInterface { }
class Shotgun implements WeaponInterface { }

class C4 implements WeaponInterface, ExplosionInterface
{
    public function explode(): string
    {
        return 'BOOM!';
    }
}
class Dynamite implements WeaponInterface, ExplosionInterface
{
    public function explode(): string
    {
        return 'p p p p p paw!';
    }
}class WeaponCollection
{
    /** @var WeaponInterface[] */
    public array $weapons = [];    public function add(WeaponInterface $weapon): void
    {
        $this->weapons[] = $weapon;
    }    public function all(): array
    {
        return $this->weapons;
    }
}$weaponCollection = new WeaponCollection();
$weaponCollection->add(new Pistol());
$weaponCollection->add(new Shotgun());
$weaponCollection->add(new C4());
$weaponCollection->add(new Dynamite());foreach ($weaponCollection->all() as $weapon)
{
    echo '... ';    if ($weapon instanceof ExplosionInterface)
{
    echo $weapon->explode();
}
}