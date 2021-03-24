<style>
    body{
       /*  background-image: url("https://p0.piqsels.com/preview/219/320/842/5be9930e0504d.jpg"); */
        background-size: 100%;
        background-attachment: fixed;
        margin-bottom: 3%;
    }
</style>


<?php
//Arrays. The 'skills' array is use for the names on the dropdowns, and the others are for the content. 
    
    $skills = [
        'PHP', 'DATABASE', 'SQL', 'JAVA', 'HTML5', 'CSS3', 'BOOTSTRAP', 'LINUX', 'C', 'GIT'
    ];
    $php = [
        'Logical operators', 'Arithmetic operators', 'Comparison operators','Unary operators', 'Conditional operators',
        'Loops',' Functions',' Indexed arrays', 'Associative arrays', 'HTTP Methods: GET / POST', 'Class', 'Methods', 'Namespace and Autoload', 'Request / Router', 'JSON',
        'SESSION', 'View-controller model', 'Database connection'
    ];
    $database = [
        'Relational model', 'Normalization', 'Client-server model', 'ERD','Relational algebra'
    ];
    $sql = [
        'Create, update, delete tables', 'Primary and Foreign keys', 'Insert, update, delete', 'Joins', 'Order and group', 'Restrictions',' Constraints', 'Subqueries','Stored Procedure: in, out, inout'
    ];
    $java = [
        'POO',' Abstract Class', 'Map', 'Interfaces', 'Collections','Operators','Access modifiers', 'Exceptions', 'Files', 'Generic class', 'Generic methods', 'JSON' 
    ];
    $html = [
        'Global structure','Headings and paragraphs','Links','Audio and video','Block elements','Inline elements','Images','Tables','Forms'
    ];
    $css = [
        'Class / id selector','Margin and padding', 'Fonts', 'Backgrounds', 'Color and gradient', 'Basic animations'
    ];
    $bootstrap = [
        'Layout', 'Content', 'Forms', 'Components'
    ];
    $linux = [
        'Basic use of terminal'];
    $c = [
        'Functions', 'Data type','Pointers', 'Arrays', 'Multidimensional Arrays', 'Dynamic', 'ArraysStructs', 'Recursion', 'Linked Lists', 'Doubly Linked List' , 'Stack', 'Queue', 'Binary Tree'];
    $git = [
        'Create repository', 'Local / remote changes','Management branches', 'Gitignore', 'Merges','Resolve merge conflicts'
    ];

    //'mayor' is use to loop through all the arrays.
    $mayor = [ $php, $database, $sql, $java, $html, $css, $bootstrap, $linux, $c, $git];
?>

<div class="skill-content-opacity skills-transition mt-5" >

    <?php
        $i = 0;
        foreach ($mayor as $k => $v) {  ?>
            <div class="mt-4 cont-center container-skills hover-skill border border-dark list-group-item-action text-white bg-dark-grey  " >
                <button class="btn btn-skills" type="button" data-toggle="collapse" data-target="#collapse-<?php echo  $i+1 ?>" aria-expanded="false" aria-controls="collapseExample">
                    <strong class="text-white">
                        <?php  print_r($skills[$i]);
                        $i++;
                        ?>
                    </strong>
                </button>
                <div class="collapse" id="collapse-<?php echo $i ?>">
                    <hr class="hr-border">  </hr>  
                    <table>
                        <tbody  class="text-center">
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
                                                                    
                                        ?><tr></tr><?php

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
