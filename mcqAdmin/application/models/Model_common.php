<?php 

class Model_common extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    function get_mtextbyid(){
        return $this->db->get_where('marquee',array('idmarquee'=>'1'))->row_array();
    }

    function update_mtext($params)
    {
        $this->db->where('idmarquee','1');
        return $this->db->update('marquee',$params);
    }

    // Students 
    function getStudentsData(){
        return $this->db->get('users')->result_array();
    }

    function getStudentsByID($id){
        return $this->db->get_where('users',array('idusers'=>$id))->row_array();
    }
    
    function deleteStudents($id)
    {
        return $this->db->delete('users',array('idusers'=>$id));
    }

    // Downloads
    function getDownloadsData()
    {
        return $this->db->get('downloads')->result_array();
    }

    function addDownload($params){
        $this->db->insert('downloads',$params);
        return $this->db->insert_id();
    }

    function getDownloadsByID($id){
        return $this->db->get_where('downloads',array('iddownloads'=>$id))->row_array();
    }

    function deleteDownloads($id)
    {
        return $this->db->delete('downloads',array('iddownloads'=>$id));
    }

    function update_downloads($id,$params)
	{
		$this->db->where('iddownloads', $id);
	    return $this->db->update('downloads', $params);
	}
    
    // Notifications

    function getNotificationsData(){
        return $this->db->get('notices')->result_array();
    }

    function addNotices($params) {
        $this->db->insert('notices',$params);
        return $this->db->insert_id();
    }

    function getNoticesByID($id){
        return $this->db->get_where('notices',array('idnotices'=>$id))->row_array();
    }

    function deleteNotices($id)
    {
        return $this->db->delete('notices',array('idnotices'=>$id));
    }

    function update_notices($id,$params)
	{
		$this->db->where('idnotices', $id);
	    return $this->db->update('notices', $params);
	}

    // currentaffairs
    function getCAData(){
        return $this->db->get('currentaffairs')->result_array();
    }

    function addCA($params) {
        $this->db->insert('currentaffairs',$params);
        return $this->db->insert_id();
    }

    function getCAByID($id){
        return $this->db->get_where('currentaffairs',array('idcurrentaffairs'=>$id))->row_array();
    }

    function deleteCA($id)
    {
        return $this->db->delete('currentaffairs',array('idcurrentaffairs'=>$id));
    }

    function update_ca($id,$params)
	{
		$this->db->where('idcurrentaffairs', $id);
	    return $this->db->update('currentaffairs', $params);
	}

    // Upcoming Exams 
    function getUEData(){
        return $this->db->get('upcomingexams')->result_array();
    }

    function addUE($params) {
        $this->db->insert('upcomingexams',$params);
        return $this->db->insert_id();
    }

    function getUEByID($id){
        return $this->db->get_where('upcomingexams',array('idupcomingexams'=>$id))->row_array();
    }

    function deleteUE($id)
    {
        return $this->db->delete('upcomingexams',array('idupcomingexams'=>$id));
    }

    function update_ue($id,$params)
	{
		$this->db->where('idupcomingexams', $id);
	    return $this->db->update('upcomingexams', $params);
	}

    // Exams Data
    function getExamsData(){
        return $this->db->get('exams')->result_array();
    }

    function addExam($params) {
        $this->db->insert('exams',$params);
        return $this->db->insert_id();
    }

    function getExamByID($id){
        return $this->db->get_where('exams',array('idexams'=>$id))->row_array();
    }


    function deleteExam($id)
    {
        return $this->db->delete('exams',array('idexams'=>$id));
    }
    public function updateExam($id, $status)
	{
		$this->db->where('idexams', $id);
		$this->db->set('exams_status', $status);
		$update = $this->db->update('exams');
		return ($update == true) ? true : false;	
	}

    public function update_Exam($id,$params)
	{
		$this->db->where('idexams', $id);
	    return $this->db->update('exams', $params);
	}

    // Syllabus data
    function getSyllabusData(){
        $this->db->join('exams','idexams = syllabus_idexams');
        return $this->db->get('syllabus')->result_array();
    }

    function addSyllabus($params) {
        $this->db->insert('syllabus',$params);
        return $this->db->insert_id();
    }

    function getSyllabusByID($id){
        $this->db->join('exams','exams.idexams = syllabus.syllabus_idexams');
        return $this->db->get_where('syllabus',array('idsyllabus'=>$id))->row_array();
    }

    function deleteSyllabus($id)
    {
        return $this->db->delete('syllabus',array('idsyllabus'=>$id));
    }

    function update_syllabus($id,$params)
    {
        $this->db->where('idsyllabus',$id);
        return $this->db->update('syllabus',$params);
    }

    // Questions Data
    function getQuestionsData(){
        $this->db->join('exams','idexams = questions_idexams');
        return $this->db->get('questions')->result_array();
    }

    function addQuestions($params) {
        $this->db->insert('questions',$params);
        return $this->db->insert_id();
    }

    function getQuestionsByID($id){
        return $this->db->get_where('questions',array('idquestions'=>$id))->row_array();
    }

    function deleteQuestions($id)
    {
        return $this->db->delete('questions',array('idquestions'=>$id));
    }

    // Results Data
    function getResultStudents(){
        $sql = 'SELECT * FROM exams_users as eu
        JOIN users as u on u.idusers = eu.exams_users_idusers
        JOIN exams as e ON e.idexams = eu.exams_users_idexams
        WHERE eu.exams_users_completed = 1';
        return $this->db->query($sql)->result_array();
    }

    public function getAnswers($exam, $sid){
        $sql = 'SELECT * FROM exams_sdata as ans 
        JOIN questions as q ON q.idquestions = ans.exams_sdata_idquestions 
        WHERE ans.exams_sdata_idexams = ? && ans.exams_sdata_idusers= ?';
        return $this->db->query($sql, array($exam, $sid))->result_array();
    }

    function getEmail(){
        $sql = 'SELECT GROUP_CONCAT(email) as email
        FROM subscription';
        return $this->db->query($sql)->row_array();
    }

}