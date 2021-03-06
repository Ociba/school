<?php
if(! function_exists('get_classes')) {
    function get_classes($class_ids){ 
        $classes = [];
        for($i=0; $i<count($class_ids); $i++){
            array_push($classes, \DB::table('primary_classes')->where('id',$class_ids[$i])->value('class'));
        }
        return $classes;
    }
}
if(! function_exists('get_subjects')) {
    function get_subjects($subject_ids){ 
        $subject_ids = explode(',',$subject_ids);
        $subjects = [];
        for($i=0; $i<count($subject_ids); $i++){
            array_push($subjects, \DB::table('subjects')->where('id',$subject_ids[$i])->value('subject'));
        }
        return implode(',',$subjects);
    }
}
if(! function_exists('get_Teachers_subject')) {
    function get_Teachers_subject($subject_ids){ 
        $subjects = [];
        for($i=0; $i<count($subject_ids); $i++){
            array_push($subjects, \DB::table('subjects')->where('id',$subject_ids[$i])->value('subject'));
        }
        return $subjects;
    }
}
