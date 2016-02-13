



<?include('include/header.php');?>

<div class="contentWrap mypage" id="mypageOrderList">

	<div class="setWidth">

		<?include('include/lnb.php');?>


		<div class="mainContent">

			<h3 class="pageSubTitle">주문/배송 조회</h3>

			<table class="itemReviewTable">
				<tr>
					<th>주문일</th>
					<th>주문번호/상품명</th>
					<th>결제금액</th>
					<th>진행상태</th>
					<th>교환/반품/취소</th>
				</tr>
				<tr>
					<td>2015.09.09</td>
					<td class="itemName">
						<a href="#">
							s000333222999admin <br/>
							SGL-53UV_WHB 스닥 프리..(총 1개 품목)
						</a>
					</td>
					<td class="price">
						49,000원
					</td>
					<td>
						<span>결제확인</span>
					</td>
					<td>
						<a href="#" class="button small"><span>취소신청</span></a>
					</td>
				</tr>
				<tr>
					<td>2015.09.09</td>
					<td class="itemName">
						<a href="#">
							s000333222999admin <br/>
							SGL-53UV_WHB 스닥 프리..(총 1개 품목)
						</a>
					</td>
					<td class="price">
						49,000원
					</td>
					<td>
						<span class="textRed">주문취소</span>
					</td>
					<td>
					</td>
				</tr>
			</table>


			<ul class="paginationBlue">
				<li>
					|<a href="#" class="active">1</a>|
				</li>
				<li>
					<a href="#">2</a>|
				</li>
				<li>
					<a href="#">3</a>|
				</li>
			</ul>





		</div>

	</div>

</div>

<?include('include/footer.php');?>
