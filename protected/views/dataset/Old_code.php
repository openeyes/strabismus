						<span class="refColumn">Sphere:</span>
						<!-- Sphere -->
						<select id="r_sph_sign" class="refSelect" onchange="refChange(this);">
							<option value="+"selected="true">+</option>
							<option value="-">-</option>
						</select>
						<select id="r_sph_int" class="refSelect" onchange="refChange(this);">
							<option value = 0 selected="true">0</option>
							<option value = 1>1</option>
							<option value = 2>2</option>
							<option value = 3>3</option>
							<option value = 4>4</option>
							<option value = 5>5</option>
							<option value = 6>6</option>
							<option value = 7>7</option>
							<option value = 8>8</option>
							<option value = 9>9</option>
							<option value = 10>10</option>
							<option value = 11>11</option>
							<option value = 12>12</option>
							<option value = 13>13</option>
							<option value = 14>14</option>
							<option value = 15>15</option>
							<option value = 16>16</option>
							<option value = 17>17</option>
							<option value = 18>18</option>
							<option value = 19>19</option>
							<option value = 20>20</option>
						</select>
						<select id="r_sph_dec" class="refSelect" onchange="refChange(this);">
							<option value = ".00" selected="true">.00</option>
							<option value = ".25">.25</option>
							<option value = ".50">.50</option>
							<option value = ".75">.75</option>
						</select></br>
						<!-- Cylinder -->
						<span class="refColumn">Cylinder:</span>
						<select id="r_cyl_sign" class="refSelect" onchange="refChange(this);">
							<option value="+"selected="true">+</option>
							<option value="-">-</option>
						</select>
						<select id="r_cyl_int" class="refSelect" onchange="refChange(this);">
							<option value = 0 selected="true">0</option>
							<option value = 1>1</option>
							<option value = 2>2</option>
							<option value = 3>3</option>
							<option value = 4>4</option>
							<option value = 5>5</option>
							<option value = 6>6</option>
							<option value = 7>7</option>
							<option value = 8>8</option>
							<option value = 9>9</option>
							<option value = 10>10</option>
							<option value = 11>11</option>
							<option value = 12>12</option>
							<option value = 13>13</option>
							<option value = 14>14</option>
							<option value = 15>15</option>
							<option value = 16>16</option>
							<option value = 17>17</option>
							<option value = 18>18</option>
							<option value = 19>19</option>
							<option value = 20>20</option>
						</select>
						<select id="r_cyl_dec" class="refSelect" onchange="refChange(this);">
							<option value = ".00" selected="true">.00</option>
							<option value = ".25">.25</option>
							<option value = ".50">.50</option>
							<option value = ".75">.75</option>
						</select>
						<br />
						<!-- Axis -->
						<span class="refColumn"></span>
						<span class="refColumn" style="width:20px;">Axis:</span>
						<?php echo $form->textField($model,'asmt_axis_right', array('onChange'=>'axisChange(this);')); ?>
						<br />
						<!-- Near add -->
						<span class="refColumn" style="width:60px;">Near Add:</span>
		                <?php echo $form->dropDownList($model,'asmt_near_right',$model->nearAddArray()); ?>
		                <?php echo $form->error($model,'asmt_near_right'); ?>


						<span class="refColumn">Sphere:</span>
						<!-- Sphere -->
						<select id="l_sph_sign" class="refSelect" onchange="refChange(this);">
							<option value="+"selected="true">+</option>
							<option value="-">-</option>
						</select>
						<select id="l_sph_int" class="refSelect" onchange="refChange(this);">
							<option value = 0 selected="true">0</option>
							<option value = 1>1</option>
							<option value = 2>2</option>
							<option value = 3>3</option>
							<option value = 4>4</option>
							<option value = 5>5</option>
							<option value = 6>6</option>
							<option value = 7>7</option>
							<option value = 8>8</option>
							<option value = 9>9</option>
							<option value = 10>10</option>
							<option value = 11>11</option>
							<option value = 12>12</option>
							<option value = 13>13</option>
							<option value = 14>14</option>
							<option value = 15>15</option>
							<option value = 16>16</option>
							<option value = 17>17</option>
							<option value = 18>18</option>
							<option value = 19>19</option>
							<option value = 20>20</option>
						</select>
						<select id="l_sph_dec" class="refSelect" onchange="refChange(this);">
							<option value = ".00" selected="true">.00</option>
							<option value = ".25">.25</option>
							<option value = ".50">.50</option>
							<option value = ".75">.75</option>
						</select></br>
						<!-- Cylinder -->
						<span class="refColumn">Cylinder:</span>
						<select id="l_cyl_sign" class="refSelect" onchange="refChange(this);">
							<option value="+"selected="true">+</option>
							<option value="-">-</option>
						</select>
						<select id="l_cyl_int" class="refSelect" onchange="refChange(this);">
							<option value = 0 selected="true">0</option>
							<option value = 1>1</option>
							<option value = 2>2</option>
							<option value = 3>3</option>
							<option value = 4>4</option>
							<option value = 5>5</option>
							<option value = 6>6</option>
							<option value = 7>7</option>
							<option value = 8>8</option>
							<option value = 9>9</option>
							<option value = 10>10</option>
							<option value = 11>11</option>
							<option value = 12>12</option>
							<option value = 13>13</option>
							<option value = 14>14</option>
							<option value = 15>15</option>
							<option value = 16>16</option>
							<option value = 17>17</option>
							<option value = 18>18</option>
							<option value = 19>19</option>
							<option value = 20>20</option>
						</select>
						<select id="l_cyl_dec" class="refSelect" onchange="refChange(this);">
							<option value = ".00" selected="true">.00</option>
							<option value = ".25">.25</option>
							<option value = ".50">.50</option>
							<option value = ".75">.75</option>
						</select>
						<br />
						<!-- Axis -->
						<span class="refColumn"></span>
						<span class="refColumn" style="width:20px;">Axis:</span>
						<?php echo $form->textField($model,'asmt_axis_left', array('onChange'=>'axisChange(this);')); ?>
						<br />
						<!-- Near add -->
						<span class="refColumn" style="width:60px;">Near Add:</span>
		                <?php echo $form->dropDownList($model,'asmt_near_left',$model->nearAddArray()); ?>
		                <?php echo $form->error($model,'asmt_near_left'); ?>
