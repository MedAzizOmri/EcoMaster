<?PHP
	class donation{
		private  $idd = null;
		private  $montant = null;
		private  $date = null;
		private  $info_bancaire = null;
	
		
		
		function __construct( int $montant,  string $date, int $info_bancaire){
			
			
			$this->montant=$montant;
			$this->date=$date;
			$this->info_bancaire=$info_bancaire;
		}
		
		function getIddon(): int{
			return $this->idd;
		}
		function getmontant(): string{
			return $this->montant;
		}
		function getDate(): string {
			return $this->date;
		}
		function getinfo_bancaire(): string{
			return $this->info_bancaire;
		}
		
		function setmontant(string $montant): void{
			$this->montant=$montant;
		}
		function setDate(string $date): void{
			$this->date=$date;
		}
		function setinfo_bancaire(string $info_bancaire): void{
			$this->info_bancaire=$info_bancaire;
		}
		
	}

?>