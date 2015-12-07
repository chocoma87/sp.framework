

<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth clearFix">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Modal</h2>

			<ul class="category">
				<li>
					<a href="#" class="button">
						<span>로그인</span>
					</a>
				</li>
				<li>
					<a href="#" class="button">
						<span>로그인</span>
					</a>
				</li>
				<li>
					<a href="#" class="button">
						<span>로그인</span>
					</a>
				</li>
			</ul>




			<div class="modal login">
				<table>
					<colgroup>
						<col width="10%"/>
						<col width="70%" />
						<col width="2%" />
						<col width="18%" />
					</colgroup>
					<tbody>
						<tr>
							<th>
								<label for="loginId">아이디</label>
							</th>
							<td>
								<input type="text" value="loginId" id="loginId" class="textInput"/>
							</td>
							<td></td>
							<td rowspan="2" class="loginBtn">
								<a href="#" class="button">
									<span> 로그인 </span>
								</a>
							</td>
						</tr>
						<tr>
							<th>
								<label for="loginPw">비밀번호</label>
							</th>
							<td>
								<input type="password" value="loginPw" id="loginPw" class="textInput"/>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="4">
								<table>
									<colgroup>
										<col width="49%" />
										<col width="2%" />
										<col widt="49%" />
									</colgroup>
									<tbody>
										<tr>
											<td colspan="3">
												<p>아이디와 비밀번호를 잊으셨나요?</p>
											</td>
										</tr>

										<tr>
											<td>
												<a href="#" class="button left">
													<span>비밀번호 찾기</span>
												</a>
											</td>
											<td></td>
											<td>
												<a href="#" class="button left">
													<span>아이디 찾기</span>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<p>회원가입을 하시면 더 많은 혜택이 있습니다.</p>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<p>
									<a href="#" class="button">
										<span>회원가입</span>
									</a>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<?php include('include/_footer.php'); ?>

