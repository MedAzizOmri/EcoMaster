<?PHP
	class event{
		private  $id_eve = null;
		private  $nom = null;
		private  $prix_dt = null;
		private  $date = null;
		private  $localisation = null;
		private  $description = null;
		private  $description2 = null;
		
		
		function __construct(string $nom, string $prix_dt,  string $date, string $localisation, string $description, string $description2){
			
			$this->nom=$nom;
			$this->prix_dt=$prix_dt;
			$this->date=$date;
			$this->localisation=$localisation;
			$this->description=$description;
			$this->description2=$description2;
		}
		
		function getid_eve(): int{
			return $this->id_eve;
		}
		function getnom(): string{
			return $this->nom;
		}
		function getprix_dt(): string {
			return $this->prix_dt;
		}
		function getdate(): string{
			return $this->date;
		}
		function getlocalisation(): string{
			return $this->localisation;
		}
		function getdescription(): string{
			return $this->description;
		}
		function getdescription2(): string{
			return $this->description2;
		}
		
		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprix_dt(string $prix_dt): void{
			$this->prix_dt=$prix_dt;
		}
		function setdate(string $date): void{
			$this->date=$date;
		}
		function setlocalisation(string $localisation): void{
			$this->localisation=$localisation;
		}
		function setdescription(string $description): void{
			$this->description=$description;
		}
		function setdescription2(string $description2): void{
			$this->description2=$description2;
		}
		
	}

?>