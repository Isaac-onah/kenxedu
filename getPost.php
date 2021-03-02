<?php


function getMainPost(){
		$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$query = "SELECT * FROM post ORDER BY date DESC LIMIT 6";
	$result = mysqli_query($db, $query);

	while($row = mysqli_fetch_array($result)){

		$query = "SELECT name FROM category
					INNER JOIN post ON category.id = post.category 
		WHERE post.id = " . $row['id'];
		$cat_result = mysqli_query($db, $query);
		$categories  = "";
		$cat_id="";
		
		while($category = mysqli_fetch_array($cat_result)){
			$categories .= '<span class="icon-check mr-2 "></span><span>'.$category['name'].'</span>';
		}
                $myvalue = $row['id'];
                $down =  "$myvalue";
		    	echo '<div class="col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="100">
						<div class="media-h h-100">
							<div class="media-h-body">
								<div class="meta" style="display:inline-block">
								    <div style="float:left; width:30%; padding-right:10px;">
								        	<figure style="width:100%; height:100%;">
                								<img src="data:'.$row['imagetype'].';base64,'.base64_encode( $row['image'] ).'" alt="'.$row['title'].'" style="width:100%; height:100%; position:inherit;">
                							</figure>
								    </div>
								    <div style="float:left;">
								        <div><h2 class="mb-3"><a href="#">'.$row['title'].'</a></h2></div>
								        <div style=" bottom: 100px; ">
								            <span class="mr-2">'.$categories.'</span></br><span class="mr-2"><span class="icon-person mr-2"></span>'.$row['author'].'</span><span class="mr-2"><span class="icon-calendar mr-2"></span>'.substr($row['date'],0,10).'</span>
								        </div>
								    </div>
								</div>
								<div class="meta"><a class="collapsed d-block" data-toggle="collapse" href="#accordion'.$down.'" aria-expanded="true" aria-controls="accordion'.$down.'" id="heading-collapsed"><i class="fa fa-chevron-down pull-right"></i>Read more..</a>
								     <div id="accordion'.$down.'" class="collapse" aria-labelledby="heading-collapsed">
                                        <p style="color:black;">'.$row['content'].'</p>
                                    </div>
								</div>
							</div>
						</div>
					</div>';
					
	}
}

function getMainPostHome(){
	$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$query = "SELECT * FROM post ORDER BY date DESC LIMIT 4";
	$result = mysqli_query($db, $query);

	while($row = mysqli_fetch_array($result)){
	
		$query = "SELECT name FROM category
					INNER JOIN post ON category.id = post.category 
		WHERE post.id = " . $row['id'];
		$cat_result = mysqli_query($db, $query);
		$categories  = "";
		$cat_id="";
		while($category = mysqli_fetch_array($cat_result)){
			$categories .= '<span class="icon-check mr-2 "></span><span>'.$category['name'].'</span>';
		}
		$strCut = (strlen($row['content'])> 100) ? substr($row['content'],0,100).'...': $row['content'];
		$content = $strCut;
		echo '<div class="col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
						<div class="media-h h-112">
							<figure style="width: 100%; height: 30%;" >
								<img src="data:'.$row['imagetype'].';base64,'.base64_encode( $row['image'] ).'" alt="'.$row['title'].'" style="width:100%; height:100%; position:inherit;">
							</figure>
							<div class="media-h-body" style="">
								<h2 class="mb-3"><a href="#">'.$row['title'].'</a></h2>
								<div class="meta "><span class="mr-2">'.$categories.'</span></br><span class="icon-person mr-2"></span>'.$row['author'].'</div>
								<p>'.$content.'</p>
								<div class="meta"><span class="icon-calendar mr-2"></span><span>'.substr($row['date'],0,10).'</span><a href="news.php" class="mb-0" data-aos="fade-up" data-aos-delay="300"" style="float: right;">Read more...</a></div>
							</div>
						</div>
					</div>';
	}
}



?>