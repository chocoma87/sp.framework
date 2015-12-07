



<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth subpage clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Input</h2>


			<table class="signUpTable">
				<colgroup>
					<col width="11%" />
					<col width="89%" />
				</colgroup>

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
							<label for="userEmail2">이메일 2</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%"/>
									<col width="5%"/>
									<col width="33%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
								<tr>
									<td>
										<input class="textInput" type="text" name="email" id="userEmail2"/>
									</td>
									<td>
										@
									</td>
									<td>
										<select name="emailSelect" id="emailSelect">
											<option value="naver">naver.com</option>
											<option value="daum">daum.net</option>
											<option value="google">gmail.com</option>
										</select>
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

							<div class="extra">
								<span>
									<input type="checkbox" name="mailling" id="newsletter2"> <label for="newsletter2">뉴스레터 수신</label>
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
											<input class="textInput" type="tel" name="mobileNum1" maxlength="4" label="핸드폰" id="userPhoneNo">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="tel" name="mobileNum2" maxlength="4" label="핸드폰">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="tel" name="mobileNum3" maxlength="4" label="핸드폰">
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
						<th>
							<label>
								<label for="userPhoneNo2">핸드폰 2</label>
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
										<select name="phoneSelect">
											<option value="010">010</option>
											<option value="016">016</option>
											<option value="019">019</option>
										</select>
									</td>
									<td>
										-
									</td>
									<td>
										<input class="textInput" type="tel" name="mobileNum2" maxlength="4" label="핸드폰" id="userPhoneNo2">
									</td>
									<td>
										-
									</td>
									<td>
										<input class="textInput" type="tel" name="mobileNum3" maxlength="4" label="핸드폰">
									</td>
								</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="sms" id="eventMailing2"> <label for="eventMailing2">정보/이벤트 SMS 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>

						</td>
					</tr>


					<tr class="address">
						<th>
							<label for="userAddress">주소</label>
						</th>
						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%">
									<col width="5%">
									<col width="30%">
									<col width="2%">
									<col width="30%">
								</colgroup>

								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="addressZip" label="우편번호" readonly>
										</td>

										<td>-</td>

										<td>
											<input class="textInput" type="text" name="addressZip2" label="우편번호" readonly>
										</td>

										<td></td>

										<td>
											<a class="button" href="#">
												<span>우편번호</span>
											</a>
										</td>
									</tr>

									<tr>
										<td colspan="5">
											<input class="textInput" type="text" name="address" readonly />
										</td>
									</tr>

									<tr>
										<td colspan="5">
											<input class="textInput" type="text" id="userAddress"/>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>



					<tr>
						<th>성별</th>
						<td>
							<input type="radio" id="genderM" name="gender" value="m" /> <label for="genderM">남자</label>
							<input type="radio" id="genderF" name="gender" value="f" /> <label for="genderF">여자</label>
						</td>
					</tr>


					<tr>
						<th>
							<label for="birthY">생년월일</label>
						</th>
						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="32%">
									<col width="2%">
									<col width="32%">
									<col width="2%">
									<col width="32%">
								</colgroup>
								<tbody>
									<tr>
										<td>
											<input type="text" maxlength="4" placeholder="생년" class="textInput" id="birthY" name="birthY" />
										</td>
										<td>
										</td>
										<td>
											<select name="birthM" id="birthM">
												<option value>월</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="3">4</option>
												<option value="3">5</option>
												<option value="3">6</option>
												<option value="3">7</option>
												<option value="3">8</option>
												<option value="3">9</option>
												<option value="3">10</option>
												<option value="3">11</option>
												<option value="3">12</option>
											</select>
										</td>
										<td>
										</td>
										<td>
											<select name="birthD" id="birthD">
												<option value>일</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="3">4</option>
												<option value="3">5</option>
												<option value="3">6</option>
												<option value="3">7</option>
												<option value="3">8</option>
												<option value="3">9</option>
												<option value="3">10</option>
												<option value="3">11</option>
												<option value="3">12</option>
												<option value="3">13</option>
												<option value="3">14</option>
												<option value="3">15</option>
												<option value="3">16</option>
												<option value="3">17</option>
												<option value="3">18</option>
												<option value="3">19</option>
												<option value="3">20</option>
												<option value="3">21</option>
												<option value="3">22</option>
												<option value="3">23</option>
												<option value="3">24</option>
												<option value="3">25</option>
												<option value="3">26</option>
												<option value="3">27</option>
												<option value="3">28</option>
												<option value="3">29</option>
												<option value="3">30</option>
											</select>
										</td>

									</tr>
								</tbody>
							</table>
						</td>

					</tr>



					<tr>
						<td class="agreementCheck" colspan="2">
							<p>
								<input type="checkbox" name="private">
								<a href="#">이용약관</a>과 <a href="#">개인정보 취급방침</a>을 읽고 이에 동의합니다.
							</p>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<button type="submit" class="button">
								<span>가입하기</span>
							</button>
						</td>
					</tr>

				</tbody>

			</table>



			<div class="pluginUse">
				<h3>Plugin Use</h3>
				<ul>
					<li>
						<a href="http://fronteed.com/iCheck/#features">icheck</a>
						<p>- http://fronteed.com/iCheck/</p>
					</li>
					<li>
						<a href="http://lcdsantos.github.io/jQuery-Selectric/index.html">selectric</a>
						<p>- http://lcdsantos.github.io/jQuery-Selectric/</p>
					</li>
				</ul>
			</div>




		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<script type="text/javascript">
	$(function(){
	/*	$('select').selectric({
			disableOnMobile: false,
			maxHeight: 150
		});

		$('input').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red'
		});
		$('input').iCheck('uncheck');*/
	});
</script>


<?php include('include/_footer.php'); ?>

