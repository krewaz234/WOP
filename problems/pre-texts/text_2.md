# Быстрее к королю!

В примостье несчатье - вторжение варваров! Надо срочным образом бежать в столицу и обо всём сообщить королю. Однако есть проблема - пешком идти несколько недель, а враги не дремлют. Поэтому нужно как можно скорее найти лошадей или чего-нибудь ещё! Говорят, что существуют тайные туннели, выротые древними, однако никто никогда их не видел.

К вашему счатью нашёлся такой человек, который знает обо всех местах, где можно так или иначе ускорить свою скорость. Он дал вам список координат всех таких точек в формате __x__, __y__.

В группе только вы владете компьютером, поэтому именно вам необходимо написать программу, которая расчитает минимальное время __t__, за которое вы сможете добраться до места назначения, а также точки, куда вам нужно идти.

## Входные данные

В первой строке вам дана координата __x__ __y__ (-1e9 <= x, y <= 1e9) вашей текущей позиции.

Во второй строке вам дана координата __x__ __y__ (-1e9 <= x, y <= 1e9) вашей конечной позиции.

В третьей строке дано натуральное число __N__ - количество точек в списке (N <= 1e6). Далее следующие N строк задаются как __x__ __y__ (-1e9 <= x, y <= 1e9) координата точки и скорость, которую вы сможете приобрести в ней. Скорость выбирается максимальной.

## Выходные данные
В первой строке выведите число __t__ - минимальное время, за которое вы сможете добраться до места назначения. Во второй строке выведите номера точек в порядке обхода, которые нужно посетить для достижения большей скорости.