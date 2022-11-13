<?php
class Data {

    protected string $group;
    protected string $date;
    protected string $cause;

    public function __construct(string $group, string $date, string $cause) {


        $this->group = $group;
        $this->date = $date;
        $this->cause = $cause;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getCause(): string
    {
        return $this->cause;
    }

}
class Row extends Data {

    public function date() : string {
        return $this->getDate();
    }
    public function group () : string {
        return " happened:  {$this->getGroup()} ";
    }
    public function cause() : ?string {
        if ($this->getGroup() == "nav noteikts"){
            return null;
        }
        return " " . $this->getCause();
    }
    public function fullInfo(): string {
        return $this->date() . $this->group() . $this->cause() ;
    }
}
