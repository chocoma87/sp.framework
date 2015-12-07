

<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth subpage">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_board.php');?>
		</div>

		<section class="col span_18">
			<h2>Board market</h2>



			<table class="itemOrderTable">
				<tbody><tr>
					<th><input type="checkbox"></th>
					<th></th>
					<th>상품정보</th>
					<th>판매가격</th>
					<th>수량</th>
					<th>적립금/쿠폰</th>
					<th>합계</th>
					<th>삭제</th>
				</tr>
				<tr>
					<td class="checkBox"><input type="checkbox"></td>
					<td class="thumbImg"><img src="images/thumb_small.png" alt="썸네일"></td>
					<td class="itemName">
						<div class="title">
							ARBLO02_PNK <br>
							아레나 여자일반용
						</div>
						<div class="orgPrice">소비자가 66,400원</div>
						<div class="option">
							<ul>
								<li>
									<span>사이즈</span>
									<select name="" id="">
										<option value="large">90~95(L)</option>
										<option value="mid">85~90(M)</option>
									</select>
								</li>
							</ul>
						</div>
					</td>
					<td class="price">
						49,000원
					</td>
					<td>
					<span class="small itemCount">
						<input type="text" class="inputText" value="1">
						<a href="#" class="minus increase">-</a>
						<a href="#" class="plus increase">+</a>
					</span>
					</td>
					<td>
						882원 <br>
						<sapn>쿠폰적용가능</sapn>
					</td>
					<td class="total">
						<ul>
							<li>SD가격 : 49,000원</li>
							<li>회원할인 : 4,900원</li>
							<li class="textSkyBlue">회원가격 : 44,100원</li>
						</ul>
					</td>
					<td class="remove">
						<a href="#">삭제</a>
					</td>
				</tr>
				<tr>
					<td class="checkBox"><input type="checkbox"></td>
					<td class="thumbImg"><img src="images/thumb_small_02.png" alt="썸네일"></td>
					<td class="itemName">
						<div class="title">
							TDRC023_YEL <br>
							티어 투구형수모
						</div>
						<div class="orgPrice">소비자가 9,800원</div>
					</td>
					<td class="price">9,800원</td>
					<td>
					<span class="small itemCount">
						<input type="text" class="inputText" value="1">
						<a href="#" class="minus increase">-</a>
						<a href="#" class="plus increase">+</a>
					</span>
					</td>
					<td>
						88원 <br>
						<span class="textRed">쿠폰적용제외</span>
					</td>
					<td class="total">
						<ul>
							<li>SD가격 : 49,000원</li>
							<li>회원할인 : 4,900원</li>
							<li class="textSkyBlue">회원가격 : 44,100원</li>
						</ul>
					</td>
					<td class="remove">
						<a href="#">삭제</a>
					</td>
				</tr>
				</tbody></table>




		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<?php include('include/_footer.php'); ?>