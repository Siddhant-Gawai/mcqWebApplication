<?php

class Model_common extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function get_mtextbyid()
    {
        return $this->db->get_where('marquee', array('idmarquee' => '1'))->row_array();
    }
    // Students 
    function getStudentsData()
    {
        return $this->db->get('students')->result_array();
    }

    function getStudentsByID($id)
    {
        return $this->db->get_where('users', array('idusers' => $id))->row_array();
    }

    function deleteStudents($id)
    {
        return $this->db->delete('students', array('idstudents' => $id));
    }

    // Downloads
    function getDownloadsData()
    {
        return $this->db->get('downloads')->result_array();
    }

    function addDownload($params)
    {
        $this->db->insert('downloads', $params);
        return $this->db->insert_id();
    }

    function getDownloadsByID($id)
    {
        return $this->db->get_where('downloads', array('iddownloads' => $id))->row_array();
    }

    function deleteDownloads($id)
    {
        return $this->db->delete('downloads', array('iddownloads' => $id));
    }

    // Notifications

    function getNotificationsData()
    {

        return $this->db->get('notices')->result_array();
    }

    function addNotices($params)
    {
        $this->db->insert('notices', $params);
        return $this->db->insert_id();
    }

    function getNoticesByID($id)
    {
        return $this->db->get_where('notices', array('idnotices' => $id))->row_array();
    }

    function deleteNotices($id)
    {
        return $this->db->delete('notices', array('idnotices' => $id));
    }

    // currentaffairs
    function getCAData()
    {
        return $this->db->get('currentaffairs')->result_array();
    }

    function addCA($params)
    {
        $this->db->insert('currentaffairs', $params);
        return $this->db->insert_id();
    }

    function getCAByID($id)
    {
        return $this->db->get_where('currentaffairs', array('idcurrentaffairs' => $id))->row_array();
    }

    function deleteCA($id)
    {
        return $this->db->delete('currentaffairs', array('idcurrentaffairs' => $id));
    }

    // Upcoming Exams 
    function getUEData()
    {
        return $this->db->get('upcomingexams')->result_array();
    }

    function addUE($params)
    {
        $this->db->insert('upcomingexams', $params);
        return $this->db->insert_id();
    }

    function getUEByID($id)
    {
        return $this->db->get_where('upcomingexams', array('idupcomingexams' => $id))->row_array();
    }

    function deleteUE($id)
    {
        return $this->db->delete('upcomingexams', array('idupcomingexams' => $id));
    }

    // Exams Data
    function getExamsData()
    {
        return $this->db->get('exams')->result_array();
    }

    function addExam($params)
    {
        $this->db->insert('exams', $params);
        return $this->db->insert_id();
    }

    function getExamByID($id)
    {
        return $this->db->get_where('exams', array('idexams' => $id))->row_array();
    }

    function deleteExam($id)
    {
        return $this->db->delete('exams', array('idexams' => $id));
    }
    public function updateExam($id, $status)
    {
        $this->db->where('idexams', $id);
        $this->db->set('exams_status', $status);
        $update = $this->db->update('exams');
        return ($update == true) ? true : false;
    }

    // Syllabus data
    function getSyllabusData()
    {
        $this->db->join('exams', 'idexams = syllabus_idexams');
        return $this->db->get('syllabus')->result_array();
    }

    function addSyllabus($params)
    {
        $this->db->insert('syllabus', $params);
        return $this->db->insert_id();
    }

    function getSyllabusByID($id)
    {
        return $this->db->get_where('syllabus', array('idsyllabus' => $id))->row_array();
    }

    function deleteSyllabus($id)
    {
        return $this->db->delete('syllabus', array('idsyllabus' => $id));
    }

    // Questions Data
    function getQuestionsData()
    {
        $this->db->join('exams', 'idexams = questions_idexams');
        return $this->db->get('questions')->result_array();
    }

    function addQuestions($params)
    {
        $this->db->insert('questions', $params);
        return $this->db->insert_id();
    }

    function getQuestionsByID($id)
    {
        return $this->db->get_where('questions', array('idquestions' => $id))->row_array();
    }

    function deleteQuestions($id)
    {
        return $this->db->delete('questions', array('idquestions' => $id));
    }

    // Exam Users Data
    function getExamUsersData()
    {
        // $this->db->join('exams','idexams = questions_idexams');
        return $this->db->get('exams_users')->result_array();
    }

    function addExamUsers($params)
    {
        $this->db->insert('exams_users', $params);
        return $this->db->insert_id();
    }

    function getExamUsersByID($id)
    {
        return $this->db->get_where('exams_users', array('idquestions' => $id))->row_array();
    }

    function deleteExamUsers($id)
    {
        return $this->db->delete('exams_users', array('idquestions' => $id));
    }

    function getExamUsersbyUser($exam, $id)
    {
        return $this->db->get_where('exams_users', array('exams_users_idexams' => $exam, 'exams_users_idusers' => $id))->row_array();
    }


    // get random question
    function getRandomQuestions($exam, $count)
    {
        $sql = 'SELECT * FROM questions
        where questions_idexams = ?
        ORDER BY RAND()
        LIMIT ?';
        return $this->db->query($sql, array($exam, $count))->result_array();
    }

    function addTempData($params)
    {
        $this->db->insert('temp_data', $params);
        return $this->db->insert_id();
    }

    function getTempData($id)
    {
		// $sql = 'SELECT td.*,q.*, sd.exams_sdata_selected  FROM temp_data as td
		// JOIN questions as q ON q.idquestions = td.qid
		// LEFT JOIN exams_sdata sd ON td.qid = sd.exams_sdata_idquestions
		// WHERE td.uuid = ?
		// ORDER BY td.srno ASC';
        $sql = 'SELECT * FROM temp_data as t 
        JOIN questions as q ON q.idquestions = t.qid 
        WHERE t.uuid = ?';
        return $this->db->query($sql, array($id))->result_array();
    }

    public function updateExamUsers($id, $params)
    {
        $this->db->where('idexams_users', $id);
        return $this->db->update('exams_users', $params);
    }

    public function updateExamUsersByQID($uuid, $qid) {
        $sql = 'UPDATE temp_data SET completed = "1"
        WHERE uuid= ? && qid = ?';
        return $this->db->query($sql, array($uuid, $qid));
    }

    public function getFirstQuestion($uuid) {
        $sql = 'SELECT t.*, q.*, sd.exams_sdata_selected FROM temp_data as t
		JOIN exams_sdata sd ON t.qid = sd.exams_sdata_idquestions
        JOIN questions as q ON q.idquestions = t.qid 
        WHERE t.completed = 0 && t.uuid = ?
        LIMIT 1';
        return $this->db->query($sql, array($uuid))->row_array();
    }

    public function getNextQuestion($id) {
        $sql = 'SELECT t.*, q.*, sd.exams_sdata_selected FROM temp_data as t
		LEFT JOIN exams_sdata sd ON t.qid = sd.exams_sdata_idquestions
		JOIN questions as q ON q.idquestions = t.qid 
        WHERE id = ? 
        LIMIT 1';
        return $this->db->query($sql, array($id))->row_array();
    }

    function getExamAnswersData()
    {
        // $this->db->join('exams','idexams = questions_idexams');
        return $this->db->get('exams_sdata')->result_array();
    }

    function addExamAnswers($params)
    {
        $this->db->insert('exams_sdata', $params);
        return $this->db->insert_id();
    }

    function getExamAnswersByID($id)
    {
        return $this->db->get_where('exams_sdata', array('idexams_sdata' => $id))->row_array();
    }

    function deleteExamAnswers($id)
    {
        return $this->db->delete('exams_sdata', array('idexams_sdata' => $id));
    }

    function getpreviousAnswer($exam, $q, $user) {
        $sql = 'SELECT * FROM exams_sdata
        WHERE exams_sdata_idexams = ? && exams_sdata_idquestions = ? && exams_sdata_idusers = ?';
        return $this->db->query($sql, array($exam, $q, $user))->row_array();
    }

    public function updateExamAnswers($id, $params)
    {
        $this->db->where('idexams_sdata', $id);
        return $this->db->update('exams_sdata', $params);
    }

    public function submitTest($exam, $sid) {
        $sql = 'UPDATE exams_users SET exams_users_completed = "1"
        WHERE exams_users_idexams= ? && exams_users_idusers = ?';
        return $this->db->query($sql, array($exam, $sid));
    }

	public function updateMarks($exam, $sid, $marks, $solved) {
        $sql = 'UPDATE exams_users SET marks = ?, solved = ?
        WHERE exams_users_idexams = ? && exams_users_idusers = ? ';
        return $this->db->query($sql, array($marks, $solved, $exam, $sid));
    }

    public function getAnswers($exam, $sid){
        $sql = 'SELECT * FROM exams_sdata as ans 
        JOIN questions as q ON q.idquestions = ans.exams_sdata_idquestions 
        WHERE ans.exams_sdata_idexams = ? && ans.exams_sdata_idusers= ?';
        return $this->db->query($sql, array($exam, $sid))->result_array();
    }

	public function getAllSubmittedExamBySID($sid) {
		$sql = 'SELECT * FROM exams_users as eu
		JOIN exams as e ON e.idexams = eu.exams_users_idexams
		WHERE eu.exams_users_idusers = ?';
        return $this->db->query($sql, array($sid))->result_array();
	}


	// Email Subscription
	function getEmailSubscibersData()
    {
        // $this->db->join('exams','idexams = questions_idexams');
        return $this->db->get('subscription')->result_array();
    }

    function addEmailSubscribers($params)
    {
        $this->db->insert('subscription', $params);
        return $this->db->insert_id();
    }

	function getEmailSubscriptionByEmail($email)
    {
        return $this->db->get_where('subscription', array('email' => $email))->row_array();
    }

}
