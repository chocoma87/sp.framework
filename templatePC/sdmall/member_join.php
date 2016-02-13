


<?include('include/header.php');?>



<div class="contentWrap memberJoin" id="memberJoinStep3">


		<div class="setWidth">

			<div class="pageTitleWrapper">
				<h2 class="pageTitle">회원가입</h2>

				<ul class="breadcrumb">
					<li>
						<span class="breadcrumb-num">01</span> 본인인증
					</li>
					<li>
						<span class="breadcrumb-num">02</span> 약관동의
					</li>
					<li class="current">
						<span class="breadcrumb-num">03</span> 정보입력
					</li>
					<li class="last">
						<span class="breadcrumb-num">04</span> 가입완료
					</li>
				</ul>
			</div>






			<table class="verticalBorderTable">
				<tr>
					<th>이름</th>
					<td>조은주</td>
				</tr>
				<tr>
					<th>아이디</th>
					<td>
						<input type="text" class="inputText" name="" style="width: 32.6%;">
						<a class="button small" href="#">중복확인</a>
						<span class="textLightGray">3~12 영문, 숫자, 가입 후 ID변경은 불가</span>
					</td>
				</tr>
				<tr>
					<th>비밀번호</th>
					<td>
						<input type="text" class="inputText" style="width: 32.6%;">
						<span class="textLightGray">6~8자의 영문, 숫자, 특수문자만 가능</span>
					</td>
				</tr>
				<tr>
					<th>비밀번호 확인</th>
					<td>
						<input type="text" class="inputText" style="width: 32.6%;">
						<span class="textLightGray">비밀번호 확인을 위해 다시 한번 입력해 주세요.</span>
					</td>
				</tr>
				<tr>
					<th>유선전화</th>
					<td>
						<table class="inputStructure">
							<colgroup>
								<col width="30%">
								<col width="5%">
								<col width="30%">
								<col width="5%">
								<col width="30%">
							</colgroup>

							<tbody>
							<tr>
								<td>
									<select name="phoneSelect" tabindex="0">
										<option value="010">02</option>
										<option value="016">062</option>
									</select>
								</td>
								<td>
									&mdash;
								</td>
								<td>
									<input class="inputText" type="tel" name="" maxlength="4">
								</td>
								<td>
									&mdash;
								</td>
								<td>
									<input class="inputText" type="tel" name="" maxlength="4">
								</td>
							</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<th>휴대폰번호</th>
					<td>
						<table class="inputStructure">
							<colgroup>
								<col width="30%">
								<col width="5%">
								<col width="30%">
								<col width="5%">
								<col width="30%">
							</colgroup>

							<tbody>
							<tr>
								<td>
									<select name="phoneSelect">
										<option value="010">010</option>
										<option value="016">016</option>
									</select>
								</td>
								<td>
									&mdash;
								</td>
								<td>
									<input class="inputText" type="tel" name="" maxlength="4">
								</td>
								<td>
									&mdash;
								</td>
								<td>
									<input class="inputText" type="tel" name="" maxlength="4">
								</td>
							</tr>
							</tbody>
						</table>

						<span class="textLightGray displayBlock">SMS로 주문/결제/배송정보를 안내합니다.</span>
					</td>
				</tr>
				<tr>
					<th>이메일</th>
					<td>
						<table class="inputStructure">
							<colgroup>
								<col width="47.5%">
								<col width="5%">
								<col width="47.5%">
							</colgroup>

							<tbody>
							<tr>
								<td>
									<input class="inputText" type="text" name="" label="핸드폰">
								</td>
								<td>
									@
								</td>
								<td>
									<select>
										<option>naver.com</option>
										<option>google.com</option>
									</select>
								</td>
							</tr>
							</tbody>
						</table>
						<span class="textLightGray displayBlock" style="padding-top: 10px;">비밀번호 분실시 임시번호가 이메일로 발송되니 정확하게 작성해주세요.</span>
					</td>
				</tr>

				<tr class="address">
					<th>주소</th>
					<td>
						<table class="inputStructure">
							<colgroup>
								<col width="47.5%">
								<col width="3%">
								<col width="49.5%">
							</colgroup>

							<tbody>
							<tr>
								<td>
									<input type="text" class="inputText" type="" name="">
								</td>
								<td>

								</td>
								<td class="hasButton">
									<a class="button small" href="#">우편번호 찾기</a>
								</td>
							</tr>
							</tbody>
						</table>

						<input type="text" class="inputText extra" />
						<input type="text" class="inputText extra" />
					</td>
				</tr>
				<tr class="inputBirth">
					<th>생년월일</th>
					<td>
						<input type="text" class="inputText" maxlength="4"><span class="date">년</span>
						<input type="text" class="inputText" maxlength="2"><span class="date">월</span>
						<input type="text" class="inputText" maxlength="2"> <span class="date">일</span>
					</td>
				</tr>
				<tr>
					<th>결혼여부</th>
					<td>
						<ul class="left checkBoxList">
							<li>
								<input checked="checked" type="radio" name="marrage" value="no" id="marrageN">
								<label for="marrageN">미혼</label>
							</li>
							<li>
								<input type="radio" name="marrage" value="yes" id="marrageY">
								<label for="marrageY">기혼</label>
							</li>
						</ul>
					</td>
				</tr>
			</table>


			<div class="buttonWrapper">
				<a href="#" class="button">취소</a>
				<a href="#" class="button">확인</a>
			</div>



		</div>





</div>

<?include('include/footer.php');?>
