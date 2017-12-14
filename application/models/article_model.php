<?php

class Article_model extends CI_Model{


    /*
     * Get articles
     * @params- $order_by(string)
     * @params - $sort(string)
     * @params - $limit(int)
     * @params - $offset(int)
     */
    public function get_articles($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
        $this->db->select('a.*,b.name as category_name, c.first_name, c.last_name');
        $this->db->from('articles as a');
        $this->db->join('categories as b','b.id=a.category_id','left');
        $this->db->join('users as c','c.id=a.user_id','left');
        if($limit != null){
            $this->db->limit($limit,$offset);
        }
        if($order_by != null){
            $this->db->order_by($order_by,$sort);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_menu_items(){
        $this->db->where('in_menu', 1);
        $this->db->order_by('order');
        $query = $this->db->get('articles');
        return $query->result();
    }

    public function get_article($id){
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        return $query->row();
    }

    /*
     * Get categories
     *
     * @param - (string) $order_by
     * @param - (string) $sort
     * @param - (int) $limit
     * @param - (int) $offset
     */

     public function get_categories($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
        $this->db->select('*');
        $this->db->from('categories');

        if($limit != null){
            $this->db->limit($limit,$offset);
        }
        if($order_by != null){
            $this->db->order_by($order_by,$sort);
        }
        $query = $this->db->get();
        return $query->result();
     }


      //get category
        public function get_category($id){
        $this->db->where('id', $id);
        $query = $this->db->get('categories');
        return $query->row();
    }

     public function insert($data){
         $this->db->insert('articles',$data);
         return true;
     }


     //update article
        public function update($data, $id){
         $this->db->where('id', $id);
         $this->db->update('articles', $data);
         return true;
     }

     //publish article

     public function publish($id){
         $data = array(
             'is_published' => 1
         );
         $this->db->where('id',$id);
         $this->db->update('articles', $data);
     }

     public function unpublish($id){
         $data = array(
             'is_published' => 0
         );

         $this->db->where('id', $id);
         $this->db->update('articles', $data);
     }

     public function delete($id){
         $this->db->where('id',$id);
         $this->db->delete('articles');
         return true;
     }
      //add category
      public function insert_category($data){
         $this->db->insert('categories',$data);
         return true;
     }

     //update category
     public function update_category($data, $id){
         $this->db->where('id', $id);
         $this->db->update('categories', $data);
         return true;
     }

      public function delete_category($id){
         $this->db->where('id',$id);
         $this->db->delete('categories',$data);
         return true;
     }

}
