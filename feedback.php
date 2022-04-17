<!DOCTYPE html>
<html lang="en">

<head>
	<title>Store Data</title>
</head>
<style>
body {
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

  color: #191970;
  font-weight: bold;
  font-family: sans-serif;
}
</style>

<body>
  <center>
	<h1>Student Feedback From</h1>

	<form method="post" id="FB" action="insert.php" >
    <div style="max-width: 400px;"></div>
     <div style="padding-bottom: 18px;font-size : 24px;">Course : Advanced Web Devlopment</div>
     <div style="padding-bottom: 18px;font-size : 18px;">Please help us improve our courses by filling out this form.</div>
     <div style="display: flex; padding-bottom: 18px;max-width : 500px;">
	
     <div style=" margin-left: 0; margin-right: 1%; width: 49%;">Student first name<br/>
      <input type="text" id="first_Name" name="first_name" style="max-width: 100%;" class="form-control"/>
     </div>
	
     <div style=" margin-left: 1%; margin-right: 0; width: 49%;">Student last name<br/>
      <input type="text" id="last_name" name="last_name" style="max-width: 100%;" class="form-control"/>
     </div>
    </div>
	
	
	<div style="padding-bottom: 18px;">Did you feel the instructor was well prepared for the classes ?<br/>
     <select id="Q1" name="Q1" style="max-width : 500px;" class="form-control">
	  <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>
	
    <div style="padding-bottom: 18px;">Did you feel like you recieved useful feedback on tests,papers,etc ?<br/>
     <select id="Q2" name="Q2" style="max-width : 500px;" class="form-control">
	  <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>

    <div style="padding-bottom: 18px;">Did you feel like the instructor showed an interest in helping students learn ?<br/>
     <select id="Q3" name="Q3" style="max-width : 500px;" class="form-control">
      <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>
	
    <div style="padding-bottom: 18px;">Did you find the lectures, tests, and assignments complementing each other ?<br/>
     <select id="Q4" name="Q4" style="max-width : 500px;" class="form-control">
      <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>

    <div style="padding-bottom: 18px;"> The instructional materials (i.e., books, readings, handouts, study guides, lab manuals, multimedia, software)<br/> 
	                                     increased my knowledge and skills in the subject matter.<br/>
     <select id="Q5" name="Q5" style="max-width : 500px;" class="form-control">
      <option>Strongly Agree</option>
      <option>Agree</option>
      <option>Neither agree nor disagree</option>
      <option>Disagree</option>
	  <option>Strongly disagree</option>
     </select>
    </div>
	
	 <div style="padding-bottom: 18px;">Did you find course to be organized in a manner that helped you understand the underlying concepts.<br/>
     <select id="Q6" name="Q6" style="max-width : 500px;" class="form-control">
      <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>

	<div style="padding-bottom: 18px;">The examinations, projects measured my knowledge of the course material<br/>
     <select id="Q7" name="Q7" style="max-width : 500px;" class="form-control">
      <option>Almost Always</option>
      <option>Frequently</option>
	  <option>Sometimes</options>
	  <option>Rarely</option>
	  <option>Almost Never</option>
     </select>
    </div>
	
	<div style="padding-bottom: 18px;">I believe that what I’m being asked to learn in this course is important<br/>
     <select id="Q8" name="Q8" style="max-width : 500px;" class="form-control">
      <option>Strongly Agree</option>
      <option>Agree</option>
      <option>Neither agree nor disagree</option>
      <option>Disagree</option>
	  <option>Strongly disagree</option>
     </select>
    </div>
	
	<div style="padding-bottom: 18px;">Overall, this course met my expectations for the quality of the course<br/>
     <select id="Q9" name="Q9" style="max-width : 500px;" class="form-control">
      <option>Strongly Agree</option>
      <option>Agree</option>
      <option>Neither agree nor disagree</option>
      <option>Disagree</option>
	  <option>Strongly disagree</option>
     </select>
    </div>
	
	<div style="padding-bottom: 18px;">The course was helpful in progress toward my degree<br/>
     <select id="Q10" name="Q10" style="max-width : 500px;" class="form-control">
      <option>Strongly Agree</option>
      <option>Agree</option>
      <option>Neither agree nor disagree</option>
      <option>Disagree</option>
	  <option>Strongly disagree</option>
     </select>
    </div>
	
	<div style="padding-bottom: 18px;">Overall, this course met my expectations for the quality of the course<br/>
     <select id="Q11" name="Q11" style="max-width : 500px;" class="form-control">
      <option>Strongly Agree</option>
      <option>Agree</option>
      <option>Neither agree nor disagree</option>
      <option>Disagree</option>
	  <option>Strongly disagree</option>
     </select>
    </div>

    <div style="padding-bottom: 18px;">Would you recommend this course to other students?<br/>
     <select id="Q12" name="Q12" style="max-width : 500px;" class="form-control">
	  <option>Yes</option>
	  <option>No</option>
	  <option>Not sure</option>
	 </select>
	</div>
	
	<div style=" margin-left: 0; margin-right: 1%; width: 49%;">Any Suggestions? :<br/>
     <textarea name="comments" id="comments" rows="4" cols="50" style="font-family:arial;" class="form-control" form="FB">
      Type Here
     </textarea>
	</div>

	<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
	
	
    </form>
	</center>
</body>

</html>
