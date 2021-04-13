<style>
body {
    /*  background-image: url("https://p0.piqsels.com/preview/219/320/842/5be9930e0504d.jpg"); */
}
</style>


<?php
//Arrays. The 'skills' array is use for the names on the dropdowns, and the others are for the content. 
    
    $skills = [
        'PHP', 'DATABASE', 'MySQL', 'JAVA', 'HTML5', 'CSS3', 'BOOTSTRAP', 'LINUX', 'C', 'GIT', 'REACT'
    ];
    $php = [
        "Operators",
        "Arrays",
        "Loops",
        "HTTP Methods",
        "OOP",
        "Autoload",
        "Request / Router",
        "Json",
        "SESSION",
        "MVC Model",
        "Database connection"
    ];
    $database = [
        "Relational model",
        "Normalization",
        "Client-Server architecture",
        "DER",
        "Relational algebra  "
    ];
    $sql = [
        "Database CRUD",
	"Table CRUD",
	"Constraints ",
	"Joins ",
	"Restrictions",
	"Subqueries",
	"Stored Procedure"
    ];
    $java = [
        "OOP",
        "Abstract and Generic class",
        "Maps",
        "Interfaces",
        "Collections",
        "Operators",
        "Exceptions",
        "Files",
        "JSON"
    ];
    $html = [
        "Structure",
	"Tables",
	"Forms",
	"Inputs",
	"Links",
	"Tags"
    ];
    $css = [
        "Class",
	"Hover",
	"Basic animations",
	"Fonts",
	"Colors"
    ];
    $bootstrap = [
        'Layout', 'Content', 'Forms', 'Components'
    ];
    $linux = [
        'Basic use of the terminal'];
    $c = [
        "Operators",
	"Arrays",
	"Structures",
	"Lists",
	"Trees",
	"Pointers"
    ];
    $git = [
        "Commits",
    "Branches",
    "Merge"
    ];
    $react = [
        "NPM",
    "State",
    "Router",
    "Express - Node"
    ];

    //'mayor' is use to loop through all the arrays.
    $mayor = [ $php, $database, $sql, $java, $html, $css, $bootstrap, $linux, $c, $git, $react];
?>

<div class="skill-content-opacity skills-transition mt-5">

    <?php
        $i = 0;
        foreach ($mayor as $k => $v) {  ?>
    <div
        class="mt-4 cont-center container-skills hover-skill border border-dark list-group-item-action text-white bg-dark-grey  ">
        <button class="btn btn-skills" type="button" data-toggle="collapse" data-target="#collapse-<?php echo  $i+1 ?>"
            aria-expanded="false" aria-controls="collapseExample">
            <strong class="text-white">
                <?php  print_r($skills[$i]);
                        $i++;
                        ?>
            </strong>
        </button>
        <div class="collapse" id="collapse-<?php echo $i ?>">
            <hr class="hr-border">
            </hr>
            <table>
                <tbody class="text-center">
                    <tr>

                        <?php
                                    $round = ceil(count($v)/5);
                                    if ($round >= 1) {
                                        if (count($v) < 5) {
                                            for ($q = 0; $q < count($v); $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        } else {
                                            for ($q = 0; $q <  5; $q++) {
                                                ?>
                        <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        } 
                                                                    
                                        ?>
                    <tr></tr><?php

                                        if ($round >= 2) {
                                            if (count($v) < 10) {
                                                for ($q = 5; $q < count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            } else {
                                                for ($q = 5; $q < 10; $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                } 
                                            }

                                            ?><tr></tr><?php
                                    
                                        if ($round >= 3) {
                                            if(count($v) < 15){
                                                for ($q = 10; $q < count($v); $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        }else{
                                            for ($q = 10; $q <  15; $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            } 
                                        }
                                    
                                        ?><tr></tr><?php
                                        if ($round >= 4) {
                                            if (count($v) < 20) {
                                                for ($q = 15; $q < count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            } else {
                                                for ($q = 15; $q <  count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            }
                                        }
                                    }
                                    }
                                }
                                
                                ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        }
    ?>
</div>