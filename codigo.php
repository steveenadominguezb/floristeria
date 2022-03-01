<div class ="divtable">
            <table style="border: solid; margin :auto">
                <?php
                $cont= 0;
                    while($respuesta = mysqli_fetch_assoc($algo)){
                        echo "<tr>";
                        $cont++;
                        $td ="";
                        foreach($respuesta as $key => $valor){
                            $th = "";
                            
                            if($cont == 1){
                                $th = $th . "<th>$key</th>";
                                echo $th;
                                $td .="<td>$valor</td>";
                                
                            }else{
                                echo "<td class='centrado'>$valor</td>";
                            }
                            
                        }
                        if($cont==1){
                            echo "<tr>$td</tr>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>