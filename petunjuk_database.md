2. Aplikasi Polling Kandidat Calon Angola DPRD (Web Base PWA)
      - Tabel: _tbl_users
   ==========================================
		    id					int(11) auto_increment primary_key
		    user_name      		varchar(15) NOT NULL
		    nama				varchar(40) NOT NULL
            password			varchar(45) NOT NULL
		    status		        	enum(‘0’,’1’)

    - Tabel: _tbl_calon
   ==========================================
		    id				int(11) auto_increment primary_key
            id_calon.           int(3) NOT NULL
		    nama_calon      varchar(90) NOT NULL
            foto			varchar(45) NOT NULL

- Tabel: _tbl_polling
   ==========================================
		    id				int(11) auto_increment primary_key
		    id_calon      	int(3) NOT NULL
            rating			int(11) NOT NULL

- Tabel: _tbl_pertanyaan
   ==========================================
		    id				int(11) auto_increment primary_key
		    pertanyaan      longtext
            status			enum(‘0’,’1’) DEFAULT ‘0’
