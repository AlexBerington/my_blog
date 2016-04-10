<?php
class AdminUpdatePublish
{
    private $return;
    private $params;
    public function __construct($id)
    {
        $this->params = new AdminGetPublModel($id);
        $this->return = view::render('publish_form', [
            'action' => '/admin/update_publish_sc',
            'id' => $id,
            'title' => $this->params->db->data['page_title'],
            'meta_d' => $this->params->db->data['page_meta_d'],
            'h1' => $this->params->db->data['page_h1'],
            's_content' => $this->params->db->data['page_s_desc'],
            'content' => $this->params->db->data['page_content'],
            'meta_k' => $this->params->db->data['page_meta_k'],
            'publish' => $this->params->db->data['page_publish'],
            'date' => $this->params->db->data['publish_date']

        ]);

    }
    public function __toString()
    {
        return $this->return;
    }
}