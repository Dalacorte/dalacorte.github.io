<?php 
class read extends Conn {
    
    private $Tabela;
    private $Places;
    private $Read;
    private $Select;
    private $Result;
    
    private Conn;
    
    public function ExeRead($Tabela,$Termos == null,$ParseString == null){
        this.Tabela = (string) $Tabela;
        if(!empty($ParseString)):
        parse_str($ParseString,$this->Places);
        endif;
        $this -> Select = "Select * From{$this->Tabela} {$Termos}";
        $this->execute();
    }
    public function getResult() {
        return $this->Result;
    }
    private function getSyntax() {
        if($this->Places):
        foreach($this->Places as $Key => $Value){
            if($Key == 'limit' || $Key == 'offset'):
            $Value = (int) $Value;
            endif;
            $this->Read->bindValue(":{$Key}",$Value,is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }endif;
    }
    
    private function Execute() {
        $this -> Conn = parent::getConn();
        try{
            $this->Read = $this->Conn->prepare($this->Select);
            $this->getSyntax();
            $this->Read->execute();
            $this->Result = $this->Read->fetchAll();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}



?>