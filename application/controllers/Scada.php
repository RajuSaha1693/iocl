<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use GO\Scheduler;
class Scada extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ScadaModel','scada');
    }

    public function loadDataFromExcel(){

        // ghy read data and insert data\

        $files = $files = glob(FCPATH.'SCADA/*.{xls,xlsx}',GLOB_BRACE);
        $sql = "truncate table scada";
        $this->scada->sqlQuery($sql);

        foreach ($files as $value) {
            $inputFileName = $value;
            /**  Identify the type of $inputFileName  **/
            $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
            /**  Create a new Reader of the type that has been identified  **/
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            /**  Load $inputFileName to a Spreadsheet Object  **/
            $spreadsheet = $reader->load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $tableName = substr($inputFileName,25);
            $tableName = strstr($tableName, '.', true);

            for ($i=0; $i <count($sheetData) ; $i++) { 
                $result = $sheetData[$i];

                $data = array(
                    'name'      => trim($result[0]),
                    'status'    => trim($result[1]),
                    'vals'      => trim($result[2]),
                    'pipeline'  => trim($tableName)
                );
                $rno = $this->scada->insert('scada',$data);
            }
        }

        if($rno > 1){
            echo 'data inserted successfully';
        }else{
            echo 'Something went wrong';
        }

    }

    // show scada data in 
    public function showScadaData(){
        $this->loadDataFromExcel();
        $data['ghy_pipeline'] = $this->scada->getData('scada','name,status,vals,pipeline',array('pipeline'=>'GHY'));
        $data['_view'] = 'scada/showScada';
        $data['_header']='Scada Data';
        $this->load->view('layouts/app',$data);
    }

    // corn job
    public function scadaCorn(){

        // Create a new scheduler
        $scheduler = new Scheduler();
        $scheduler->php('path/to/my/scada.php Scada loadDataFromExcel')->everyMinute(5);

    } 
}