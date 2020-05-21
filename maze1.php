<?php
    function displayMaze($s){
        //$start="left";
        $icon="@";
        $res="";
        $left=true;
        for ($i=0; $i<$s; $i++){
           
            if ($i%2){
                for($j=0;$j<$s; $j++){                
                    if ($j<=0){
                        $res.="<font color='#000'>$icon</font>";
                    }else if ($j>=($s-1)){
                        $res.="<font color='#000'>$icon</font>";
                    }else{
                        $res.="<font color='#fff'>$icon</font>";
                    }                     
                }
                             
            }else{
                for($j=0;$j<$s; $j++){
                    if ($left){
                        if ($j==1){
                            $res.="<font color='#fff'>$icon</font>";
                        }else{
                            $res.="<font color='#000'>$icon</font>";
                        }
                       
                    }else{
                        if ($j==($s-2)){
                            $res.="<font color='#fff'>$icon</font>";
                        }else{
                            $res.="<font color='#000'>$icon</font>";
                        }
                    }
                        
                } 
                if ($left){
                    $left=false;
                }else $left=true;
            }
           
            $res.= "<br/>";
          
        }
        echo $res;
    }
    
    
?>

<div style="display:flex;flex-direction:row;">
<input type="text" id="e1" value="<?php echo $_GET['id']?>"/><button id="bproses">Tampilkan</button>
</div>
<br/>
<div id="view"><?php displayMaze($_GET["id"]);?></div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(function() {
    $( "#bproses" ).click(function() {
        var url = "";    
        
        url += '?id='+$("#e1").val();      
        window.location.href = url;
    });
   
})
</script>