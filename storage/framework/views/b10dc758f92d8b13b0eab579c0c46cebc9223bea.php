<div class="row">
    <?php
        $index = 0;
        $emp = trim('emp');
        //define("EMPLOYEE", "emp");
    ?>
    <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $stringformat = "";
                    //convert the string into lowercase
                    $stringtolower = strtolower($attr);
                    //extract the first and last word in the string and store it
                    $firstword = trim(strstr($stringtolower, ' ', true));
                    $secondword = trim(strstr($stringtolower, ' '));

                    //check which word is being stored from step two above
                    if(strcmp($firstword, 'employee') == 0)
                    {
                      $stringformat = $emp.'_'.trim(substr($secondword, -6, 1).'o');
                      //print $firstword;
                      //print $stringformat;
                    }
                    elseif (strcmp($firstword, 'first') == 0)
                    {
                       $stringformat = $emp.'_'.trim(substr($firstword,-5, 1)).trim($secondword);
                      //print $firstword;
                       //print $stringformat;
                      //print " First";
                    }
                     elseif (strcmp($firstword, 'last') == 0)
                    {
                       $stringformat = $emp.'_'.trim(substr($firstword,-4, 1)).trim($secondword);
                      //print $firstword;
                       //print $stringformat;
                      //print " First";
                    }


                    //if the word is for instance first, this means it is the first name
                    //
                    //$stringformat =  strtolower(str_replace(' ', '', $attr));
                    //print $stringformat;
                ?>
                
                
                
                

                <label for="input<?=$stringformat?>" class="col-sm-3 control-label"><?php echo e($attr); ?></label>
                
                
                <div class="col-sm-9">

                    <input value="<?php echo e(isset($oldvalues) ? $oldvalues[$index] : ''); ?>" type="text" class="form-control"
                           name="<?=$stringformat?>" id="input<?=$stringformat?>" placeholder="<?php echo e($attr); ?>">
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <?php
            $index++;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>