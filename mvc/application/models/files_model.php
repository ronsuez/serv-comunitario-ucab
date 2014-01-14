<?php class Files_Model extends CI_Model {


	   public function user_exists($id){
 		

	   		$sql =  "SELECT id FROM photo_files WHERE title='$id'";

	
	   		$query = $this->db->query($sql);
   			
   	
   		 if($query->num_rows > 0 ){

   		 	return $query->row();

   		 }else{

   		 	return 0;
   		 }

   }

public function get_file($file_id)
{
	return $this->db->select()
			->from('photo_files')
			->where('id', $file_id)
			->get()
			->row();
}

public function set_photo($cedula){

		return $this->db->select('filename')
			->from('photo_files')
			->where('title',$cedula)
			->get()
			->row();		

}

   public function delete_file($file_id)
{
	$file = $this->get_file($file_id);
	if (!$this->db->where('id', $file_id)->delete('photo_files'))
	{
		return FALSE;
	}
	unlink('./files/' . $file->filename);	
	return TRUE;
}


 
   public function insert_file($filename, $title)
   {
      $data = array(
         'filename'     => $filename,
         'title'        => $title
      );

      	$exists =$this->user_exists($title);
      		


       if($exists){


      	$result=get_object_vars($exists);
			

		$id_foto=$result['id'];

       	$this->delete_file($id_foto);

       	$this->db->where('title', $data['title']);  
        
        $this->db->update('photo_files', $data); 

          return 1;//success

      	}

      	$this->db->insert('photo_files', $data);

      	  return $this->db->insert_id();	
      	
      
    
   }


 
}

?>