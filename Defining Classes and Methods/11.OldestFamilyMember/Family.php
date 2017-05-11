<?php
class Family{
    private $members = [];
    private $oldestMember = null;

    public function addMember(Person $member){
        $this->members[] = $member;
        if ($this->oldestMember == null ||
            $member->getAge() > $this->oldestMember->getAge()) {
            $this->oldestMember = $member;
        }
    }

    public function getOldestMember()
    {
        return $this->oldestMember;
    }
}