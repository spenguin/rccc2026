<?php
/**
 * Display Application Form
 */

function applicationForm( $atts = [], $content = null, $tag = '' )
{ 
    if( isset($_POST['submit'] ) )
    {
        $previous = $_POST['previous-exhibitor'];
        if( 0 == $previous )
        {
            // redirect to Google form
            wp_redirect( 'https://docs.google.com/forms/d/e/1FAIpQLSfLTnHBzsEpLhJRpEEvhJYWQIrxlML74DM8N7UOY2BFSy9XYQ/viewform?usp=publish-editor' );
            exit;
        } else {
            $name   = wp_filter_nohtml_kses( $_POST['exhibitor_name'] );
            $email  = wp_kses( $_POST['email'], [] );
            $message= 'Name: ' . $name . '<br>Email: ' . $email;

            wp_mail( 'raincitycomiccon@gmail.com', 'RCC 2026 Applicant', $message );

            $o      = "Cool. I have your details already.";
        }
    } else {
        $now = time();
        if( $now > strtotime('2026-03-01' ) ):
            $o = '<p>Applications are now closed</p>';
        else:
            $site_url   = site_url();
            $o      = <<<EOD
                <div class="max-wrapper__narrow">
                    <h2>Apply to Exhibit</h2>
                    <p>Rain City Comicon 2026 will be held at Croatian Cultural Centre. A full table is $125, a half table is $70.</p><p>Please note: I will use your details to send you advanced notice of other events I organise, such as New West Comic Fest</p>
                    <form action="$site_url" method="post" class="max-wrapper__narrow">
                        <label for="exhibitor_name">Your name:</label>
                        <input type="text" name="exhibitor_name" placeholder="Your name" required/>
                        <label for="email">Your email:</label>
                        <input type="email" name="email" placeholder="Your email address" required />
                        <label for="previous-exhibitor">Have you exhibited at Rain City Comicon before?</label>
                        <input type="radio" name="previous-exhibitor" value="1" required>Yes
                        <input type="radio" name="previous-exhibitor" value="0">No
                        <input type="submit" value="Submit" name="submit" />
                    </form>
                </div>
            EOD;
        endif;
    }

    return $o;
}