<?php
namespace App\Modules\SuperAdmin\Database\Seeders;

use Illuminate\Database\Seeder;

class JobListingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_listings')->delete();
        
        \DB::table('job_listings')->insert(array (
            0 => 
            array (
                'id' => 2,
                'contract_type' => 'Full Time',
                'job_location' => 'Airport Road',
                'job_title' => 'Deleniti voluptatem',
                'job_description' => '<p>Sapiente est quaerat.</p><p><br></p><p><b>yktjgh</b></p>',
                'created_at' => '2020-06-23 02:39:38',
                'updated_at' => '2020-06-23 02:39:38',
            ),
            1 => 
            array (
                'id' => 3,
                'contract_type' => 'Full Time',
                'job_location' => 'Airport Road',
                'job_title' => 'Customer Assistant',
            'job_description' => '<p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);">Tabes velums, tanquam camerarius tata. A <b>falsis</b>, urbs superbus xiphias. Nunquam examinare abnoba. Humani generiss observare, tanquam tus.</span><br></p>',
                'created_at' => '2020-06-23 02:41:31',
                'updated_at' => '2020-06-23 02:41:31',
            ),
            2 => 
            array (
                'id' => 4,
                'contract_type' => 'Part Time',
                'job_location' => 'Etuwewe',
                'job_title' => 'Web Designer',
            'job_description' => '<p><br></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><u>Superbus uria recte attrahendams</u> bursa est. Sunt cottaes quaestio <b>camerarius</b>, dexter assimilatioes. Lotus, noster classiss recte locus de pius, flavum bubo. Diatrias sunt particulas de <i>flavum ignigena</i>.</span></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><br></span><br></p>',
                'created_at' => '2020-06-23 12:35:12',
                'updated_at' => '2020-06-23 12:35:12',
            ),
            3 => 
            array (
                'id' => 5,
                'contract_type' => 'Part Time',
                'job_location' => 'Etuwewe',
                'job_title' => 'Technical Support Agent',
            'job_description' => '<p><br></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><u>Superbus uria recte attrahendams</u> bursa est. Sunt cottaes quaestio <b>camerarius</b>, dexter assimilatioes. Lotus, noster classiss recte locus de pius, flavum bubo. Diatrias sunt particulas de <i>flavum ignigena</i>.</span></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><br></span><br></p>',
                'created_at' => '2020-06-23 12:35:28',
                'updated_at' => '2020-06-23 12:35:28',
            ),
            4 => 
            array (
                'id' => 6,
                'contract_type' => 'Part Time',
                'job_location' => 'Etuwewe',
                'job_title' => 'Accountant',
            'job_description' => '<p><br></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><u>Superbus uria recte attrahendams</u> bursa est. Sunt cottaes quaestio <b>camerarius</b>, dexter assimilatioes. Lotus, noster classiss recte locus de pius, flavum bubo. Diatrias sunt particulas de <i>flavum ignigena</i>.</span></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><br></span><br></p>',
                'created_at' => '2020-06-23 12:35:40',
                'updated_at' => '2020-06-23 12:35:40',
            ),
            5 => 
            array (
                'id' => 7,
                'contract_type' => 'Locum',
                'job_location' => 'Etuwewe',
                'job_title' => 'Customer Care Manager',
            'job_description' => '<p><br></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><u>Superbus uria recte attrahendams</u> bursa est. Sunt cottaes quaestio <b>camerarius</b>, dexter assimilatioes. Lotus, noster classiss recte locus de pius, flavum bubo. Diatrias sunt particulas de <i>flavum ignigena</i>.</span></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><br></span><br></p>',
                'created_at' => '2020-06-23 12:35:59',
                'updated_at' => '2020-06-23 12:35:59',
            ),
            6 => 
            array (
                'id' => 8,
                'contract_type' => 'Contract',
                'job_location' => 'Airport Road',
                'job_title' => 'Junior PR Manager',
            'job_description' => '<p><br></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><u>Superbus uria recte attrahendams</u> bursa est. Sunt cottaes quaestio <b>camerarius</b>, dexter assimilatioes. Lotus, noster classiss recte locus de pius, flavum bubo. Diatrias sunt particulas de <i>flavum ignigena</i>.</span></p><p><span style="color: rgb(156, 156, 156); font-family: Poppins, sans-serif; background-color: rgb(245, 246, 250);"><br></span><br></p>',
                'created_at' => '2020-06-23 12:36:17',
                'updated_at' => '2020-06-23 12:36:17',
            ),
            7 => 
            array (
                'id' => 9,
                'contract_type' => 'Contract',
                'job_location' => 'Airport Road',
                'job_title' => 'Financial Controller',
            'job_description' => '<ul><li><div style="text-align: justify;"><span style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;">The ideal candidate is someone who doesn\'t like status quo, can pick up things quickly, has strong analytical, critical thinking, and problem solving skills.</span></div><div style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line; text-align: justify;">&nbsp;&nbsp;</div><div style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line; text-align: justify;">The Accountant will report directly to the <b>Head of Operations (COO)</b>. This role will assist in the preparation of financial statements in a timely manner, sales tax, fixed assets, month-end close and GL ledger work, with reconciliation. He/She will be expected to implement the necessary internal controls for their area of responsibility and to complete maintenance and improvement projects as directed.</div><div style="text-align: justify;"><font color="rgba(0, 0, 0, 0.870588235294118)" face="Roboto, arial, sans-serif"><span style="white-space: pre-line;"><br></span></font></div><div style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line; text-align: justify;"><b><span style="font-size: 18px;">Responsibilities:</span></b>&nbsp;</div></li><li style="text-align: justify; "><span style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;"><br></span></li></ul><p style="text-align: justify; "><span style="color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;">Assist in the preparation of financial statement in a timely manner as well as supports as needed to prepare for monthly</span><span class="WbZuDe" style="display: inline; color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;"> quarterly, and year-end closings as well as internal and external audits</span></p><p style="text-align: justify;"><span class="WbZuDe" style="display: inline; color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;">Work with the Accounting team to complete special projects in a timely manner as directed</span></p><p style="text-align: justify;"><span class="WbZuDe" style="display: inline; color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;">Monitor, manage and recommend improvements to the current internal control procedures </span></p><p style="text-align: justify;"><span class="WbZuDe" style="display: inline; color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; white-space: pre-line;">Support data collection processes and ensure financial data quality</span><br></p>',
                'created_at' => '2020-06-23 12:46:04',
                'updated_at' => '2020-06-23 12:46:04',
            ),
        ));

        
    }
}