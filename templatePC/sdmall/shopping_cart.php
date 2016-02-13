


<?include('include/header.php');?>



<div class="contentWrap checkout" id="checkoutStep1">

	<div class="setWidth">

		<div class="pageTitleWrapper">
			<h2 class="pageTitle">장바구니</h2>

			<ul class="breadcrumb">
				<li class="current"><span class="breadcrumb-num">01</span>장바구니</li>
				<li><span class="breadcrumb-num">02</span>주문/결제</li>
				<li class="last"><span class="breadcrumb-num">03</span>주문완료</li>
			</ul>
		</div>


		<table class="itemOrderTable">
			<tr>
				<th><input type="checkbox"/></th>
				<th></th>
				<th>상품정보</th>
				<th>판매가격</th>
				<th>수량</th>
				<th>적립금/쿠폰</th>
				<th>합계</th>
				<th>삭제</th>
			</tr>
			<tr>
				<td class="checkBox"><input type="checkbox"/></td>
				<td class="thumbImg"><img src="images/thumb_small.png" alt="썸네일"/></td>
				<td class="itemInfo">
					<div class="title">
						ARBLO02_PNK <br/>
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
					<span class="itemCount small">
						<input type="text" class="inputText" value="1"/>
						<a href="#" class="itemCount-increase minus"><i class="xi-minus"></i></a>
						<a href="#" class="itemCount-increase plus"><i class="xi-plus"></i></a>
					</span>
				</td>
				<td>
					882원 <br/>
					<sapn>쿠폰적용가능</sapn>
				</td>
				<td class="totalPrice">
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
		</table>


		<table class="orderAmount">
			<tr class="price">
				<td class="total">총주문금액 &nbsp;&nbsp; <strong>52,920</strong><sapn class="textSmall">원</sapn></td>
				<td class="shipping">배송비 &nbsp;&nbsp; <strong>0</strong><sapn class="textSmall">원</sapn></td>
				<td class="totalPrice">결제예정금액 &nbsp;&nbsp; <strong>52,920<sapn class="textSmall">원</sapn></strong></td>
			</tr>
		</table>


		<div class="buttonWrapper">
			<a href="#" class="button">전체상품주문</a>
			<a href="#" class="button">선택상품주문</a>
		</div>

	</div>


</div>






<?include('include/footer.php');?>
