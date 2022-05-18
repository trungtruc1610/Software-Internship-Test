<?php
$_InputArray = [
    false, "up", "down", "left", "right", true, false
];

function FindFreqent($InputArray)
{
    if (gettype($InputArray) === 'array')
    {
        /** 
         * Biến lưu giá trị phần tử xuất hiện nhiều nhất.
         * Biến điếm số lần xuất hiện.
         */
        $CurrentMostFreq = '';
        $CurrentMostFreqCount = 0;

        foreach ($InputArray AS $Value)
        {
            $NexMostFreq = $Value;
            $NextMostFreqCount = 0;


            foreach ($InputArray AS $CheckCount)
                if ($CheckCount === $Value)
                    $NextMostFreqCount++;

            if ($NextMostFreqCount > $CurrentMostFreqCount)
            {
                if ($Value === true)
                    $CurrentMostFreq = "TRUE";
                elseif ($Value === false)
                    $CurrentMostFreq = "FALSE";
                elseif ($Value === null)
                    $CurrentMostFreq = "NULL";
                elseif (gettype($Value) === 'integer' || gettype($Value) === 'double')
                    $CurrentMostFreq = (string) $Value;
                else
                    $CurrentMostFreq = $Value;

                $CurrentMostFreqCount = $NextMostFreqCount;
            }
        }

        return $CurrentMostFreq;
    } else return "Input Parameter MUST BE ARRAY!"; /** Nếu input đầu vào không phải mảng thì trả về thông báo lỗi. */
}

echo FindFreqent($_InputArray);

?>