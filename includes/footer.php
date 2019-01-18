<footer>
    <section class="section group" id="contact">
        <h2>Contact</h2>
        <section class="col span_6_of_12">
            <h3>Inquiries</h3>
            <?php
                include 'form.php';    
            ?>
        </section>
        <section class="col span_6_of_12">
            <h3>Connect with Jeremy</h3>
            <ul>
            <li><a href="https://www.linkedin.com/in/jeremy-alexander" target="_blank"><img src="images/linkedin-ui-icon.png" alt="linkedin"></a></li>
            <li><a href="https://stackoverflow.com/users/9584042/jeremy-alexander" target="_blank"><img src="images/stackoverflow-ui-icon.png" alt="stack overflow"></a></li>           
            <li><a href="https://www.pinterest.com/jmalexander29/" target="_blank"><img src="images/pinterest-ui-icon.png" alt="pinterest"></a></li>
            <li><a href="https://github.com/JeremyAlexander1" target="_blank"><img src="images/GitHub-Mark-64px.png" alt="github"></a></li>    
            </ul>
            <p>
            <a href="mailto:jmalexander29@gmail.com?Subject=Website-Inquiry" target="_top"><img src="images/mail-ui-icon.png" alt="e-mail"></a>
            </p>
        </section>
    </section>
    <!-- PHP date include for Los Angeles timezone -->
    <?php 
        include 'includes/date-include.php';
    ?>
    <p>(Pacific Time Zone)</p>
    
    <a href="http://webdesign.jaretro.com/" id="designed-by">
        <p id="designed-by">Web site designed by 
        <br>
        Jeremy Alexander
        <br>
        &copy;2019</p>  
    </a>    
    </footer>

</body>
</html>