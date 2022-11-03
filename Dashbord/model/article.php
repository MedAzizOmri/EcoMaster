<?PHP
	class article{
		private  $id = null;
		private  $subject = null;
		private  $writer = null;
		private  $datepub = null;
		private  $contenu = null;
		private  $img_dir = null;
		
		
		
		public function __construct(string $subject, string $writer,  string $datepub, string $contenu,string $img_dir){
			
			$this->subject=$subject;
			$this->writer=$writer;
			$this->datepub=$datepub;
			$this->contenu=$contenu;
			$this->img_dir=$img_dir;
			
		}
		
		public function getId(): int{
			return $this->id;
		}
		public function getSubject(): string{
			return $this->subject;
		}
		public function getWriter(): string {
			return $this->writer;
		}
		public function getDatepub(): string{
			return $this->datepub;
		}
		public function getContenu(): string{
			return $this->contenu;
		}
		public function getimg_dir(): string{
			return $this->img_dir;
		}
		
		public function setsubject(string $subject): void{
			$this->subject=$subject;
		}
		public function setwriter(string $writer): void{
			$this->writer=$writer;
		}
		public function setdatepub(string $datepub): void{
			$this->datepub=$datepub;
		}
		public function setcontenu(string $contenu): void{
			$this->contenu=$contenu;
		}
		public function setimg_dir(string $img_dir): void{
			$this->img_dir=$img_dir;
		}
		
		
	}

?>