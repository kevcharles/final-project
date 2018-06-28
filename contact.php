<?php
	include ("header.php");
?>
<div class="wrapper container">
    <main>
        <div class="form">
                <form name="myForm" onsubmit="return validateForm()" method="post" action="formmail.php">
                    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
                    <input type="hidden" name="recipients" value="kcharles.kc4@gmail.com"/>
                    <input type="hidden" name="good_url"
                    value="thanks.php"/>
                    <input type="hidden" name="bad_url"
                    value="error.php"/>
                    <table class="form">
                    <tr>
                        <td class="td">
                            <label for="firstName">First Name:</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="realname" id="firstName" required/>   
                        </td>
                    </tr>                                          
                    <tr>
                        <td class="td">
                            <label for="lastName">Last Name:</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="lastName" id="lastName" required/>  
                        </td>
                    </tr>    
                    <tr>
                        <td class="td">
                            <label for="phoneNumber">Phone Number:</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="phoneNumber" id="phoneNumber" size="10" maxlength="10"/>  
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            <label for="emailAddress">Email:</label>
                        </td>
                        <td>
                            <input class="input" type="email" name="email" id="emailAddress" required/>  
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            <label for="studentNumber">Student Number:</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="studentNumber" id="studentNumber"/>  
                        </td>
                    </tr>
                    <tr>
                    <td></td>
                        <td>
                            <input type="radio" name="student" id="prospective" value="prospective" checked/> Prosepective Student<br> 
                            <input type="radio" name="student" id="current" value="current"> Current Student
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            <label for="subject">Subject:</label>
                        </td>
                        <td>
                        <input class="input" type="text" name="subject" id="subject"/> 
                        </td>
                    </tr>
                    <tr>
                        <td class="td">
                            <label for="textarea">Message:</label>
                        </td>
                        <td>
                            <textarea name="message" id="textarea" style="width: 100%; height: 50px; overflow: auto;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            <input type="submit" value="Submit"/>
                            <input type="reset" value="Cancel"/>
                        </td>
                    </tr>  
                </table>
            </form>  
        </div>
    </main>
    <?php
	include ("footer.php");
?>