<table width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tr>
				    <th class="first">
				    	当前周<br>
				    	<span>({$stDay}-{$endDay}）</span>
				    </th>
				    <volist name="weeks" id="vo">
				    	<th>{$vo.week}</th>
				    </volist>
				  </tr>
				  <tr>
				    <td>上午</td>
				    <volist name="weeks" id="vo">
				    	<if condition="$vo['amFull'] egt 1">
				   			<td>
				   			<div class="off">
				   				已约满
				   			</div>
				   			</td>
				   		<else/>
				   		<eq name="vo['isOt']" value="1">
				   			<td>
				   			<div class="off">
				   				已过期
				   			</div>
				   			</td>
				   			<else/>
				   			<td><div class="canreservation" date="{$vo.dateDay}" aop="1">预约</div></td>
				   		</eq>
				   			
				   		</if>
				    </volist>
				  </tr>
				  <tr>
				    <td>下午</td>
				   
				    <volist name="weeks" id="vo">
				    	<if condition="$vo['pmFull'] egt 1">
				   			<td>
				   			<div class="off">
				   				已约满
				   			</div></td>
				   		<else/>
					   		<eq name="vo['isOt']" value="1">
					   			<td>
					   			<div class="off">
					   				已过期
					   			</div>
					   			</td>
					   			<else/>
					   			<td><div class="canreservation" date="{$vo.dateDay}" aop="2">预约</div></td>
					   		</eq>
				   			
				   		</if>
				    </volist>
				  </tr>
</table>