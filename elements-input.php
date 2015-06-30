

<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Input</h2>


			<table class="signUpTable">

				<tbody>
					<tr>
						<th>
							<label for="userId">아이디</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="68%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="userId" label="아이디" id="userId">
										</td>
										<td></td>
										<td>
											<a href="#" class="button">
												<span>중복확인</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<tr>
						<th>
							<label for="userPw">비밀번호</label>
						</th>

						<td>
							<input class="textInput" type="password" name="password" label="비밀번호" id="userPw">
						</td>
					</tr>

					<tr>
						<th>
							<label for="userPwConfirm">비밀번호 확인</label>
						</th>

						<td>
							<input class="textInput" type="password" name="password2" label="비밀번호" id="userPwConfirm">
						</td>
					</tr>

					<tr>
						<th>
							<label for="userName">이름</label>
						</th>

						<td>
							<input class="textInput" type="text" name="userName" label="이름" id="userName">
						</td>
					</tr>


					<tr>
						<th>
							<label for="userEmail">이메일</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="68%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="email" label="이메일" id="userEmail">
										</td>
										<td>
										</td>
										<td>
											<a href="#" class="button">
												<span>중복확인</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="mailling" id="newsletter"> <label for="newsletter">뉴스레터 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>
						</td>
					</tr>

					<tr>
						<th>
							<label>
								<label for="userPhoneNo">핸드폰</label>
							</label>
						</th>

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
											<input class="textInput" type="text" name="mobileNum1" maxlength="4" label="핸드폰" id="userPhoneNo">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="text" name="mobileNum2" maxlength="4" label="핸드폰">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="text" name="mobileNum3" maxlength="4" label="핸드폰">
										</td>
									</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="sms" id="eventMailing"> <label for="eventMailing">정보/이벤트 SMS 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>

						</td>
					</tr>

					<tr>
						<td class="agreementCheck" colspan="2">
							<p>
								<input type="checkbox" id="privateCheck" name="private">
								<a href="#">이용약관</a>과 <a href="#">개인정보 취급방침</a>을 읽고 이에 동의합니다.
							</p>
						</td>
					</tr>

					<tr>
						<td id="avoidDbl" colspan="2">
							<button type="submit" class="button large">
								<span>가입하기</span>
							</button>
						</td>
					</tr>

				</tbody>

			</table>




		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<?php include('include/_footer.php'); ?>

