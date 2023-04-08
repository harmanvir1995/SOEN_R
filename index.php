<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <header>
      <nav class="menu">
        <div class="navdiv">
          <a href="index.html">Home</a>
          <a href="resume.html">Resume</a>
          <a href="projects.html">Projects</a>
          <a href="contact.html">Contact</a>
          <a href="social.html">Social</a>
          <a href="admin.html">Admin</a>
        </div>
      </nav>
    </header>

    <section>
      <h2>Introduction</h2>
      <img
        class="photo"
        id="profile"
        src="profile_picture.JPG"
        alt="Profile Picture"
      />
      <div class="professional_statement">
        <?php
            $data = file_get_contents("./adminIndex.txt");
            $position_prof = strpos($data, "Professional Statement:");
            $position_brief = strpos($data, "Breif Biography:");
            if($position == false){
            }
            else{
                $length = $position_brief -  $position_prof;
                $professional_statement = substr($data, $position_prof, $length);
                echo $professional_statement;
            }
            echo "</div>
            <div class="brief_bio">"
            
            
        ?>
        I pride myself as a responsible, professional and trustworthy
        individual.I work very well independently but I can also function very
        well as part of a team. My mind is as versatile as it is creative and my
        experience in working with customers means that it has molded me into an
        approachable and professional individual. I also have a great sense of
        humor to compliment this. My current job role includes the design and
        implementation of a wide array of solution architectures for cloud based
        and on-premises platforms. On a daily basisI am expected to meet with
        development and operations teams to discuss their needs on specific
        solutions. GenerallyI oversee and manage a project from start to finish
        which includes, design and implementation. My resourceful demeanor is
        beneficial in helping to overcome obstacles encountered with new
        technologies and requirements, thus conserving on time allocated to the
        project at hand. Over the past years what I've liked most about the
        experiences I've gathered is that it has afforded me the opportunity to
        acquire new knowledge and be creative in my field.I would welcome the
        same opportunity to be a part of your company and pose as a valuable
        asset towards its development.I would bring to the table all of the
        skills that is required of 8 Solutions Architect, DevOps Engineer and
        Linux Systems Administrator. In the hope that a mutual interest
        develops,I would appreciate the opportunity to have dialogue with your
        company for future endeavors.
      </div>
    </section>
  </body>
</html>
