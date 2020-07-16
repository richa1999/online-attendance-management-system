<?php $this->load->view('hod/header') ?>
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class ="row">
     <div class = "column">
     <?php
          foreach($fetch_data->result() as $row)
               {
                    ?>
        <h3> Course : <?php echo $row->course; ?></h3>
     
        <h3>Department : <?php echo $row->dept; ?><br></h3>
     </div>
     </div>
       <?php }
        
        ?>
        <br>
              <form class="registered_student_form" >
     <div class="row">
              
                                <div class="select">
                                    <label for="year">Year*</label>
                                    <select id="year" name="year">
                                        <option value="">Select Year</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="select">
                                    <label for="Sem">Semester*</label>
                                    <select id="Sem" name="Sem">
                                        <option value="">Select Sem</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            
               
          </div>
          </form>
          <button onClick="GFG_Fun()"> 
            click here 
        </button> 
        <p id="GFG_DOWN"></p> 
 <script> 
 var flg=false;
    var down = document.getElementById("GFG_DOWN"); 
            
    // Create a break line element 
    var br = document.createElement("br");  
    function GFG_Fun() { 
        
    if(!flg){
    // Create a form synamically 
    var form = document.createElement("form"); 
    form.setAttribute("method", "post"); 
    form.setAttribute("action", "<?php echo base_url('index.php/hod/set_subject/store_subject');?>"); 
  
    // Create an input element for Full Name 
    var fir = document.createElement("input"); 
    fir.setAttribute("type", "text"); 
    fir.setAttribute("name", "sub1"); 
    fir.setAttribute("placeholder", "Subject 1"); 

    var sec = document.createElement("input"); 
    sec.setAttribute("type", "text"); 
    sec.setAttribute("name", "sub2"); 
    sec.setAttribute("placeholder", "Subject 2"); 

    var  thi = document.createElement("input"); 
    thi.setAttribute("type", "text"); 
    thi.setAttribute("name", "sub3"); 
    thi.setAttribute("placeholder", "Subject 3"); 

    var four = document.createElement("input"); 
    four.setAttribute("type", "text"); 
    four.setAttribute("name", "sub4"); 
    four.setAttribute("placeholder", "Subject 4"); 

    var five = document.createElement("input"); 
    five.setAttribute("type", "text"); 
    five.setAttribute("name", "sub5"); 
    five.setAttribute("placeholder", "Subject 5"); 

    var six = document.createElement("input"); 
    six.setAttribute("type", "text"); 
    six.setAttribute("name", "sub6"); 
    six.setAttribute("placeholder", "Subject 6"); 

    var a = document.createElement("input"); 
    a.setAttribute("type", "text"); 
    a.setAttribute("name", "code1"); 
    a.setAttribute("placeholder", "Subject Code"); 

    var b = document.createElement("input"); 
    b.setAttribute("type", "text"); 
    b.setAttribute("name", "code2"); 
    b.setAttribute("placeholder", "Subject Code"); 

    var c = document.createElement("input"); 
    c.setAttribute("type", "text"); 
    c.setAttribute("name", "code3"); 
    c.setAttribute("placeholder", "Subject Code"); 
    
    var d = document.createElement("input"); 
    d.setAttribute("type", "text"); 
    d.setAttribute("name", "code4"); 
    d.setAttribute("placeholder", "Subject Code"); 

    var e = document.createElement("input"); 
    e.setAttribute("type", "text"); 
    e.setAttribute("name", "code5"); 
    e.setAttribute("placeholder", "Subject Code"); 

    var f = document.createElement("input"); 
    f.setAttribute("type", "text"); 
    f.setAttribute("name", "code6"); 
    f.setAttribute("placeholder", "Subject Code"); 

    var t1 = document.createElement("input"); 
    t1.setAttribute("type", "text"); 
    t1.setAttribute("name", "t1"); 
    t1.setAttribute("placeholder", "Faculty Name"); 

    var t2 = document.createElement("input"); 
    t2.setAttribute("type", "text"); 
    t2.setAttribute("name", "t2"); 
    t2.setAttribute("placeholder", "Faculty Name"); 

    var t3 = document.createElement("input"); 
    t3.setAttribute("type", "text"); 
    t3.setAttribute("name", "t3"); 
    t3.setAttribute("placeholder", "Faculty Name"); 

    var t4 = document.createElement("input"); 
    t4.setAttribute("type", "text"); 
    t4.setAttribute("name", "t4"); 
    t4.setAttribute("placeholder", "Faculty Name"); 

    var t5 = document.createElement("input"); 
    t5.setAttribute("type", "text"); 
    t5.setAttribute("name", "t5"); 
    t5.setAttribute("placeholder", "Faculty Name"); 

    var t6 = document.createElement("input"); 
    t6.setAttribute("type", "text"); 
    t6.setAttribute("name", "t6"); 
    t6.setAttribute("placeholder", "Faculty Name"); 
   
  
                // create a submit button 
                var s = document.createElement("input"); 
                s.setAttribute("type", "submit"); 
                s.setAttribute("value", "Submit"); 
                  
                // Append the full name input to the form 
                form.appendChild(fir);
                form.appendChild(a);
                form.appendChild(t1);
                form.appendChild(br.cloneNode());
                form.appendChild(sec);
                form.appendChild(b);
                form.appendChild(t2);
                form.appendChild(br.cloneNode());
                form.appendChild(thi);
                form.appendChild(c);
                form.appendChild(t3);
                form.appendChild(br.cloneNode());
                form.appendChild(four);
                form.appendChild(d);
                form.appendChild(t4);
                form.appendChild(br.cloneNode());
                form.appendChild(five);
                form.appendChild(e);
                form.appendChild(t5);
                form.appendChild(br.cloneNode());
                form.appendChild(six);
                form.appendChild(f);
                form.appendChild(t6);
                form.appendChild(br.cloneNode());
               
                  
                // Inserting a line break 
                form.appendChild(br.cloneNode());  
                  
                // Append the submit button to the form 
                form.appendChild(s);  
  
                document.getElementsByTagName("main")[0] 
               .appendChild(form); 

               flg=true;
                }
            } 
        </script> 
        <?php $this->load->view('footer.php') ?>
     </main>
