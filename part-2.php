<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ส่วนที่ 2</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="tab">
    <form method="post">
        <!-- Section description -->
        <h2>ส่วนที่ 2 ข้อมูลพฤติกรรมการใช้รถใช้ถนน</h2>
        <!------------ Questions set ------------>

            <p>
            <h4>10. วัตถุประสงค์ของการเดินทางของท่าน โดยส่วนใหญ่ (เลือกได้มากกว่า 1 ข้อ) </h4>
            <label for="trv-purpose1"><input type="checkbox" name="travel-purpose1" value="1" id="trv-purpose1">ไปเรียน</label>
            <label for="trv-purpose2"><input type="checkbox" name="travel-purpose2" value="2" id="trv-purpose2">ไปทำงาน</label>
            <label for="trv-purpose3"><input type="checkbox" name="travel-purpose3" value="3" id="trv-purpose3">ซื้อสินค้า</label>
            <label for="trv-purpose4"><input type="checkbox" name="travel-purpose4" value="4" id="trv-purpose4">ท่องเที่ยว/พักผ่อน</label>
            <label for="trv-purpose5"><input type="checkbox" name="travel-purpose5" value="5" id="trv-purpose5">ติดต่อธุรกิจ</label>
            <label for="trv-purpose6"><input type="checkbox" name="travel-purpose6" value="6" id="trv-purpose6">ทำธุระส่วนตัว</label>
            <label for="trv-purpose7"><input type="checkbox" name="travel-purpose7" value="7" id="trv-purpose7">กลับบ้าน/ที่พักอาศัย</label>
            <label for="trv-purpose0"><input type="checkbox" name="travel-purpose8" value="0" id="trv-purpose0">อื่นๆ (โปรดระบุ)</label>
            <input type="text" name="trv-purpose-other" placeholder="อื่นๆ โปรดระบุ">
            </p>

            <p>
            <h4>11. ท่านเดินทางบนถนนใช้ยานพาหนะประเภทใด โดยส่วนใหญ่</h4>
            <label for="veh1"><input type="radio" name="vehicle" value="1" id="veh1">รถยนต์ส่วนบุคคล</label>
            <label for="veh2"><input type="radio" name="vehicle" value="2" id="veh2">รถจักรยานยนต์</label>
            <label for="veh3"><input type="radio" name="vehicle" value="3" id="veh3">รถตู้โดยสาร</label>
            <label for="veh4"><input type="radio" name="vehicle" value="4" id="veh4">รถโดยสารประจำทาง</label>
            <label for="veh5"><input type="radio" name="vehicle" value="5" id="veh5">รถสองแถวประจำทาง</label>
            <label for="veh6"><input type="radio" name="vehicle" value="6" id="veh6">รถแท็กซี่</label>
            <label for="veh7"><input type="radio" name="vehicle" value="7" id="veh7">รถจักรยาน</label>
            <label for="veh0"><input type="radio" name="vehicle" value="0" id="veh0">อื่นๆ (โปรดระบุ)</label>
            <input type="text" name="veh_other" placeholder="ยานพาหนะอื่นๆ โปรดระบุ">
            </p>

            <p>
            <h4>12. ส่วนมากท่านเป็นผู้ใช้ถนนประเภทใด</h4>
            <label for="road-user1"><input type="radio" name="road-use-type" value="1" id="road-user1">ผู้ขับขี่</label>
            <label for="road-user2"><input type="radio" name="road-use-type" value="2" id="road-user2">ผู้โดยสาร<a href = "#19">(ข้ามไปข้อ 19.)</a></label>
            </p>

            <p>
            <h4>13. (หากเป็นผู้ขับขี่) ประสบการณ์ในการขับขี่</h4>
            <label for="drv-exp1"><input type="radio" value="1" name="driving-experience" id="drv-exp1">ต่ำกว่า 1 ปี</label>
            <label for="drv-exp2"><input type="radio" value="2" name="driving-experience" id="drv-exp2">1-5 ปี</label>
            <label for="drv-exp3"><input type="radio" value="3" name="driving-experience" id="drv-exp3">6-10 ปี</label>
            <label for="drv-exp4"><input type="radio" value="4" name="driving-experience" id="drv-exp4">11-15 ปี</label>
            <label for="drv-exp5"><input type="radio" value="5" name="driving-experience" id="drv-exp5">16-20 ปี</label>
            <label for="drv-exp6"><input type="radio" value="6" name="driving-experience" id="drv-exp6">20 ปีขึ้นไป</label>
            </p>

            <p>
            <h4>14. (หากเป็นผู้ขับขี่) ท่านมีความระมัดระวังอุบัติเหตุในขณะขับขี่ยานพาหนะมากน้อยแค่ไหน</h4>
            <label for="awareness1"><input type="radio" name="road-safety-awareness" value="1" id="awareness1">ระมัดระวังอย่างดีที่สุด </label>
            <label for="awareness2"><input type="radio" name="road-safety-awareness" value="2" id="awareness2">ระมัดระวังอย่างดี</label>
            <label for="awareness3"><input type="radio" name="road-safety-awareness" value="3" id="awareness3">ระมัดระวังปานกลาง</label>
            <label for="awareness4"><input type="radio" name="road-safety-awareness" value="4" id="awareness4">ระมัดระวังน้อย</label>
            </p>

            <p>
            <h4>15. (หากเป็นผู้ขับขี่) ระดับความเร็วเฉลี่ยในการขับขี่ยานพาหนะ<u>ในเขตชุมชน</u></h4>
            <label for="spd-living-area1"><input type="radio" name="speed-living-area" value="1" id="spd-living-area1">น้อยกว่า 40 กม.ต่อชม. </label>
            <label for="spd-living-area2"><input type="radio" name="speed-living-area" value="2" id="spd-living-area2">40-60 กม.ต่อชม. </label>
            <label for="spd-living-area3"><input type="radio" name="speed-living-area" value="3" id="spd-living-area3">60-80 กม.ต่อชม.</label>
            <label for="spd-living-area4"><input type="radio" name="speed-living-area" value="4" id="spd-living-area4">80-100 กม.ต่อชม.</label>
            <label for="spd-living-area5"><input type="radio" name="speed-living-area" value="5" id="spd-living-area5">100-120 กม.ต่อชม.</label>
            <label for="spd-living-area6"><input type="radio" name="speed-living-area" value="6" id="spd-living-area6">มากกว่า 120 กม.ต่อชม.</label>
            </p>

            <p>
            <h4>16. (หากเป็นผู้ขับขี่) ระดับความเร็วเฉลี่ยในการขับขี่ยานพาหนะ<u>นอกเขตชุมชน</u></h4>
            <label for="spd-out-living-area1"><input type="radio" name="speed-outside-living-area" value="1" id="spd-out-living-area1">น้อยกว่า 40 กม.ต่อชม.</label>
            <label for="spd-out-living-area2"><input type="radio" name="speed-outside-living-area" value="2" id="spd-out-living-area2">40-60 กม.ต่อชม.</label>
            <label for="spd-out-living-area3"><input type="radio" name="speed-outside-living-area" value="3" id="spd-out-living-area3">60-80 กม.ต่อชม.</label>
            <label for="spd-out-living-area4"><input type="radio" name="speed-outside-living-area" value="4" id="spd-out-living-area4">80-100 กม.ต่อชม.</label>
            <label for="spd-out-living-area5"><input type="radio" name="speed-outside-living-area" value="5" id="spd-out-living-area5">100-120 กม.ต่อชม.</label>
            <label for="spd-out-living-area6"><input type="radio" name="speed-outside-living-area" value="6" id="spd-out-living-area6">มากกว่า 120 กม.ต่อชม.</label>
            </p>

            <p>
              <h4>17. (หากเป็นผู้ขับขี่) พฤติกรรมในการรักษาความปลอดภัยในการใช้รถใช้ถนน </h4>
                <p>1. สวมใส่หมวกนิรภัย หรือ คาดเข็มขัดนิรภัย</p>

                <label for="q1_4"><input type="radio" value="4" name="q1" id="q1_4">ทุกครั้ง (100%)</label>

                <label for="q1_3"><input type="radio" value="3" name="q1" id="q1_3">บ่อยครั้ง (75%)</label>

                <label for="q1_2"><input type="radio" value="2" name="q1" id="q1_2">บางครั้ง (50%)</label>

                <label for="q1_1"><input type="radio" value="1" name="q1" id="q1_1">ไม่ค่อยปฏิบัติ (25%)</label>

		<label for="q1_0"><input type="radio" value="0" name="q1" id="q1_0">ไม่ปฏิบัติเลย (0%)</label>

              </p>
              <p>2. ดื่มเครื่องดื่มแอลกอฮอล์ก่อนขับขี่</p>

              <label for="q2_4"><input type="radio" value="4" name="q2" id="q2_4">ทุกครั้ง (100%)</label>

              <label for="q2_3"><input type="radio" value="3" name="q2" id="q2_3">บ่อยครั้ง (75%)</label>

              <label for="q2_2"><input type="radio" value="2" name="q2" id="q2_2">บางครั้ง (50%)</label>

              <label for="q2_1"><input type="radio" value="1" name="q2" id="q2_1">ไม่ค่อยปฏิบัติ (25%)</label>

	      <label for="q2_0"><input type="radio" value="0" name="q1" id="q2_0">ไม่ปฏิบัติเลย (0%)</label>

            </p>
            <p>3. ใช้โทรศัพท์เคลื่อนที่ขณะขับขี่ โดยไม่ใช้อุปกรณ์เสริม(Small Talk)</p>

            <label for="q3_4"><input type="radio" value="4" name="q3" id="q3_4">ทุกครั้ง (100%)</label>

            <label for="q3_3"><input type="radio" value="3" name="q3" id="q3_3">บ่อยครั้ง (75%)</label>

            <label for="q3_2"><input type="radio" value="2" name="q3" id="q3_2">บางครั้ง (50%)</label>

            <label for="q3_1"><input type="radio" value="1" name="q3" id="q3_1">ไม่ค่อยปฏิบัติ (25%)</label>

	    <label for="q3_0"><input type="radio" value="0" name="q1" id="q3_0">ไม่ปฏิบัติเลย (0%)</label>

          </p>
          <p>4. ให้สัญญาณไฟทุกครั้งขณะเปลี่ยนช่องทางเดินรถ</p>

          <label for="q4_4"><input type="radio" value="4" name="q4" id="q4_4">ทุกครั้ง (100%)</label>

          <label for="q4_3"><input type="radio" value="3" name="q4" id="q4_3">บ่อยครั้ง (75%)</label>

          <label for="q4_2"><input type="radio" value="2" name="q4" id="q4_2">บางครั้ง (50%)</label>

          <label for="q4_1"><input type="radio" value="1" name="q4" id="q4_1">ไม่ค่อยปฏิบัติ (25%)</label>

	  <label for="q4_0"><input type="radio" value="0" name="q1" id="q4_0">ไม่ปฏิบัติเลย (0%)</label>

        </p>
        <p>5. ฝ่าฝืนกฎจราจร เช่น การขับย้อนศร การขับฝ่าไฟแดง</p>

        <label for="q5_4"><input type="radio" value="4" name="q5" id="q5_4">ทุกครั้ง (100%)</label>

        <label for="q5_3"><input type="radio" value="3" name="q5" id="q5_3">บ่อยครั้ง (75%)</label>

        <label for="q5_2"><input type="radio" value="2" name="q5" id="q5_2">บางครั้ง (50%)</label>

        <label for="q5_1"><input type="radio" value="1" name="q5" id="q5_1">ไม่ค่อยปฏิบัติ (25%)</label>

	<label for="q5_0"><input type="radio" value="0" name="q1" id="q5_0">ไม่ปฏิบัติเลย (0%)</label>

      </p>
      <p>6. เช็คสภาพรถก่อนการขับขี่</p>

      	<label for="q6_4"><input type="radio" value="4" name="q6" id="q6_4">ทุกครั้ง (100%)</label>

      	<label for="q6_3"><input type="radio" value="3" name="q6" id="q6_3">บ่อยครั้ง (75%)</label>

      	<label for="q6_2"><input type="radio" value="2" name="q6" id="q6_2">บางครั้ง (50%)</label>

      	<label for="q6_1"><input type="radio" value="1" name="q6" id="q6_1">ไม่ค่อยปฏิบัติ (25%)</label>

	<label for="q6_0"><input type="radio" value="0" name="q1" id="q6_0">ไม่ปฏิบัติเลย (0%)</label>

      </p>
    </p>

    <p>
    <h4>18. (หากเป็นผู้ขับขี่) พาหนะที่ท่านใช้เป็นประจำ ทำประกันภัยในลักษณะใด</h4>
    <label for="insurance1"><input type="radio" name="insurance" value="1" id="insurance1">ภาคบังคับ (พ.ร.บ. อย่างเดียว)  </label>
    <label for="insurance2"><input type="radio" name="insurance" value="2" id="insurance2">กรมธรรม์ชั้น 3 และ พ.ร.บ. </label>
    <label for="insurance3"><input type="radio" name="insurance" value="3" id="insurance3">กรมธรรม์ชั้น 2 และ พ.ร.บ.</label>
    <label for="insurance4"><input type="radio" name="insurance" value="4" id="insurance4">กรมธรรม์ชั้น 1 และ พ.ร.บ.</label>
    </p>

    <p>
    <h4 a id = "19">19. ประสบการณ์ในการประสบอุบัติเหตุทางถนน</h4>
    <label for="accident1"><input type="radio" name="accident" value="1" id="accident1">ไม่เคย <a href = "part-3.html">(ข้ามไปส่วนที่ 3)</a></label>
    <label for="accident2"><input type="radio" name="accident" value="2" id="accident2">1-2 ครั้ง</label>
    <label for="accident3"><input type="radio" name="accident" value="3" id="accident3">3-5 ครั้ง</label>
    <label for="accident4"><input type="radio" name="accident" value="4" id="accident4">6-8 ครั้ง</label>
    <label for="accident5"><input type="radio" name="accident" value="5" id="accident5">มากกว่า 8 ครั้ง</label>
    </p>

    <p>
    <h4>20. หากมีประสบการณ์ในการประสบอุบัติเหตุทางถนน ท่านได้รับบาดเจ็บโดยที่<u>ไม่ต้องนอนรักษาตัวในโรงพยาบาล</u>ทั้งหมดกี่ครั้ง</h4>
    <label for="non-admit1"><input type="radio" name="non-admit" value="1" id="non-admit1">ไม่เคย <a href = "#21">(ข้ามไปข้อที่ 22.)</a></label>
    <label for="non-admit2"><input type="radio" name="non-admit" value="2" id="non-admit2">1-2 ครั้ง</label>
    <label for="non-admit3"><input type="radio" name="non-admit" value="3" id="non-admit3">3-5 ครั้ง</label>
    <label for="non-admit4"><input type="radio" name="non-admit" value="4" id="non-admit4">6-8 ครั้ง</label>
    <label for="non-admit5"><input type="radio" name="non-admit" value="5" id="non-admit5">มากกว่า 8 ครั้ง</label>
    </p>

    <p>
    <h4>21. (หากท่านเคยได้รับบาดเจ็บโดยที่ไม่ต้องนอนรักษาตัวในโรงพยาบาล) ค่ารักษาพยาบาลเฉลี่ยต่ออุบัติเหตุ 1 ครั้ง</h4>
    <label for="hospital-cost1"><input type="radio" name="hospital-cost" value="1" id="hospital-cost1">น้อยกว่า 500 บาท</label>
    <label for="hospital-cost2"><input type="radio" name="hospital-cost" value="2" id="hospital-cost2">501-700 บาท </label>
    <label for="hospital-cost3"><input type="radio" name="hospital-cost" value="3" id="hospital-cost3">701- 1,000 บาท</label>
    <label for="hospital-cost4"><input type="radio" name="hospital-cost" value="4" id="hospital-cost4">1,001-1,200 บาท</label>
    <label for="hospital-cost5"><input type="radio" name="hospital-cost" value="5" id="hospital-cost5">1,201-1,500 บาท</label>
    <label for="hospital-cost6"><input type="radio" name="hospital-cost" value="6" id="hospital-cost6">1,501- 2,000 บาท</label>
    <label for="hospital-cost7"><input type="radio" name="hospital-cost" value="7" id="hospital-cost7">มากกว่า 2,000 บาท</label>
    </p>

    <p>
    <h4 a id = "22">22. หากมีประสบการณ์ในการประสบอุบัติเหตุทางถนน ท่านได้รับบาดเจ็บจน<u>ต้องรักษาตัวในโรงพยาบาล</u>ทั้งหมดกี่ครั้ง</h4>
    <label for="admit1"><input type="radio" name="admit" value="1" id="admit1">1-2 ครั้ง</label>
    <label for="admit2"><input type="radio" name="admit" value="2" id="admit2">3-5 ครั้ง</label>
    <label for="admit3"><input type="radio" name="admit" value="3" id="admit3">6-8 ครั้ง</label>
    <label for="admit4"><input type="radio" name="admit" value="4" id="admit4">มากกว่า 8 ครั้ง</label>
    </p>

    <p>
    <h4>23. (หากท่านเคยได้รับบาดเจ็บโดยที่นอนรักษาตัวในโรงพยาบาล) ระยะเวลาที่รักษาตัวในโรงพยาบาลต่ออุบัติเหตุ 1 ครั้ง</h4>
    <label for="admit-length1"><input type="radio" name="admit-length" value="1" id="admit-length1">1-2 วัน</label>
    <label for="admit-length2"><input type="radio" name="admit-length" value="2" id="admit-length2">3-4 วัน</label>
    <label for="admit-length3"><input type="radio" name="admit-length" value="3" id="admit-length3">5-7 วัน</label>
    <label for="admit-length4"><input type="radio" name="admit-length" value="4" id="admit-length4">มากกว่า 1 สัปดาห์</label>
    </p>

    <p>
    <h4>24. (หากท่านต้องรักษาตัวในโรงพยาบาล) ค่ารักษาพยาบาลเฉลี่ยต่ออุบัติเหตุ 1 ครั้ง</h4>
    <label for="admit-cost1"><input type="radio" name="admit-cost" value="1" id="admit-cost1">น้อยกว่า 5,000 บาท</label>
    <label for="admit-cost2"><input type="radio" name="admit-cost" value="2" id="admit-cost2">5,000-7,000 บาท</label>
    <label for="admit-cost3"><input type="radio" name="admit-cost" value="3" id="admit-cost3">7,001-10,000 บาท</label>
    <label for="admit-cost4"><input type="radio" name="admit-cost" value="4" id="admit-cost4">10,001- 20,000 บาท</label>
    <label for="admit-cost5"><input type="radio" name="admit-cost" value="5" id="admit-cost5">20,001-30,000 บาท</label>
    <label for="admit-cost6"><input type="radio" name="admit-cost" value="6" id="admit-cost6">มากกว่า 30,000 บาท์</label>
    </p>

		<center>
      <a href="index.html" class="previous">&laquo; ล้างคำตอบ</a>
			<a href="part-3-0.html" class="next">หน้าถัดไป &raquo;</a>
		</center>
		</br>
		</form>

    </div>

</body>
</html>
