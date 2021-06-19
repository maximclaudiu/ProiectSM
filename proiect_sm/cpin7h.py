import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)
GPIO.setup(3,GPIO.OUT)
GPIO.output(3,1) # sting LED
GPIO.setwarnings(False)

